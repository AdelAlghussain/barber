<?php

namespace App\Http\Controllers;

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

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::count();
        $employees = Empolyee::count();
        $gallaries = Gallary::count();
        $products = Product::count();
        $offers = Offer::count();
        $workTimes = Worktime::count();
        $results = Result::count();
        return view('dashboard.dashboard', [
            'comments' => $comments,
            'employees' => $employees,
            'gallaries' => $gallaries,
            'workTimes' => $workTimes,
            'results' => $results,
            'products' => $products,
            'offers' => $offers,
        ]);
    }
}
