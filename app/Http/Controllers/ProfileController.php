<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreprofileRequest;
use App\Http\Resources\ProfileResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::first();
        return view('dashboard.profile.profile')->with('profile', $user);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        $user = User::first();
        return new ProfileResource($user);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empolyee  $empolyee
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $profile = User::first();
        return view('dashboard.profile.editProfile', ['profile' => $profile]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empolyee  $empolyee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {


        $profile = User::first();

        $this->DeleteImage($profile->profile_photo_path);
        $path = $this->AddImage('profile', $request->image);

        logger($request->all());

        $profile->update([
            'name' => $request->name,
            'age' => $request->age,
            'experience' => $request->experience,
            'email' => $request->email,
            'phone' => $request->phone,
            'location' => $request->location,
            'facbook' => $request->facbook,
            'twitter' => $request->twitter,
            'description' => $request->description,
            'profile_photo_path' => $path

        ]);
        return redirect('/profile');
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
