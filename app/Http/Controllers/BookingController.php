<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingRequest;
use App\Models\Empolyee;
use App\Http\Requests\StoreempolyeeRequest;
use App\Http\Requests\UpdateempolyeeRequest;
use App\Http\Resources\EmployeeResource;
use App\Models\User;
use App\Notifications\BookingNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\Storage;

class BookingController extends Controller
{
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function booking(BookingRequest $request)
    {

        $admin = User::first();


            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'message' => $request->message,
            ];
    


        $admin->notify(new BookingNotification($data));


        $data = [
            'status' => 'success',
            'message' => 'email was sent successfully'
        ];

        return  response()->json($data , 200);
    }

  
}
