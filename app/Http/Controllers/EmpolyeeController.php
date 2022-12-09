<?php

namespace App\Http\Controllers;

use App\Models\Empolyee;
use App\Http\Requests\StoreempolyeeRequest;
use App\Http\Requests\UpdateempolyeeRequest;
use App\Http\Resources\EmployeeResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\Storage;

class EmpolyeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Empolyee::get();
        return view('dashboard.employee.employees')->with('employees', $employees);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function employees()
    {
        $employees = Empolyee::get();
        return EmployeeResource::collection($employees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(StoreempolyeeRequest $request)
    {

        $path = $this->AddImage('employees', $request->image);

        Empolyee::create([
            'name' => $request->name,
            'age' => $request->age,
            'experience' => $request->experience,
            'description' => $request->description,
            'profile_photo_path' => $path

        ]);
        return redirect('/employees');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.employee.addEmployee');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empolyee  $empolyee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empolyee = Empolyee::findOrFail($id);
        return view('dashboard.employee.editEmployee', ['employee' => $empolyee]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empolyee  $empolyee
     * @return \Illuminate\Http\Response
     */
    public function update(Empolyee $employee, StoreempolyeeRequest $request)
    {

        $this->DeleteImage($employee->profile_photo_path);
        $path = $this->AddImage('employees', $request->image);


        $employee->update([
            'name' => $request->name,
            'age' => $request->age,
            'experience' => $request->experience,
            'description' => $request->description,
            'profile_photo_path' => $path

        ]);
        return redirect('/employees');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\empolyee  $empolyee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empolyee =  Empolyee::find($id);
        $this->DeleteImage($empolyee->profile_photo_path);
        $empolyee->delete();
        
        return redirect('/employees');
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
