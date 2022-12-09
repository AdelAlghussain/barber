<?php

namespace App\Http\Controllers;

use App\Models\Gallary;
use App\Http\Requests\StoregallaryRequest;
use App\Http\Requests\UpdategallaryRequest;
use App\Http\Resources\GallaryResource;
use App\Models\Empolyee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GallaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallaries = Gallary::get();
        return view('dashboard.gallary.gallaries')->with('gallaries', $gallaries);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function gallaries()
    {
        $gallaries = Gallary::get();
        return GallaryResource::collection($gallaries);
    }


        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.gallary.addGallary');
    }

        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(StoregallaryRequest $request)
    {

        $path = $this->AddImage('gallaries', $request->image);

        Gallary::create([
            'gallary_photo_path' => $path
        ]);
        return redirect('/gallaries');
    }

  



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallary  $empolyee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallary = Gallary::findOrFail($id);
        return view('dashboard.gallary.editGallary', ['gallary' => $gallary]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallary  $empolyee
     * @return \Illuminate\Http\Response
     */
    public function update(Gallary $gallary, StoregallaryRequest $request)
    {

        $this->DeleteImage($gallary->gallary_photo_path);
        $path = $this->AddImage('gallaries', $request->image);


        $gallary->update([

            'gallary_photo_path' => $path

        ]);
        return redirect('/gallaries');
    
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallary  $empolyee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallary =  Gallary::find($id);
        $this->DeleteImage($gallary->gallary_photo_path);
        $gallary->delete();
        return redirect('/gallaries');
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
