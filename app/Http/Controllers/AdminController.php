<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResetPasswordRequest;
use App\Models\Worktime;
use App\Http\Requests\StoreworktimeRequest;
use App\Http\Requests\UpdateworktimeRequest;
use App\Http\Resources\WorkTimeResource;
use App\Models\Comment;
use App\Models\Empolyee;
use App\Models\Gallary;
use App\Models\Offer;
use App\Models\Product;
use App\Models\Result;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('Auth.login');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function setting()
    {
        $color = User::first('color')->color;
        return view('Dashboard.setting', ['color' => $color]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function resetPassword(ResetPasswordRequest $request)
    {
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
   
        dd('Password changed successfully.');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function changeColor(Request $request)
    {

        $request->validate([
            'color' => 'required',
        ]);

        $color = $request->color;

        $user = User::first();

        $user->color = $color;
        $user->save();

        return redirect('/setting');

    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);


        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('/')
                ->withSuccess('Signed in');
        }

        return Redirect::back()->withErrors(['credential' => 'credential errors']);
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {

        Auth::logout();

        return redirect('/login');
    }
}
