<?php

namespace App\Http\Controllers;

use App\Models\result;
use App\Http\Requests\StoreresultRequest;
use App\Http\Requests\UpdateresultRequest;
use App\Http\Resources\resultResource;
use App\Models\Empolyee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Result::get();
        return view('dashboard.result.results')->with('results', $results);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function results()
    {
        $results = Result::get();
        return resultResource::collection($results);
    }


        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.result.addResult');
    }

        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(StoreresultRequest $request)
    {

        $path = $this->AddImage('results', $request->image);

        Result::create([
            'result_photo_path' => $path
        ]);
        return redirect('/results');
    }

  



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\result  $empolyee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result = Result::findOrFail($id);
        return view('dashboard.result.editResult', ['result' => $result]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\result  $empolyee
     * @return \Illuminate\Http\Response
     */
    public function update(Result $result, StoreresultRequest $request)
    {

        $this->DeleteImage($result->result_photo_path);
        $path = $this->AddImage('results', $request->image);


        $result->update([

            'result_photo_path' => $path

        ]);
        return redirect('/results');
    
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\result  $empolyee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result =  Result::find($id);
        $this->DeleteImage($result->result_photo_path);
        $result->delete();
        return redirect('/results');
    }

    public function AddImage($folder, $file)
    {
        $folder = 'storage/' . $folder;
        $filename  = time() . str_replace(' ', '', $file->getClientOriginalName());
        $path = $file->move($folder,  $filename);
        // $url = asset($path);
        return $path;
    }

    public function DeleteImage($file)
    {
        File::delete($file);
    }
}
