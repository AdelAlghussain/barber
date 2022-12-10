<?php

namespace App\Http\Controllers;

use App\Models\comment;
use App\Http\Requests\StorecommentRequest;
use App\Http\Requests\UpdatecommentRequest;
use App\Http\Resources\CommentResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::simplePaginate(4);
        return view('dashboard.comments')->with('comments', $comments);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function comments()
    {
        $comments = Comment::get();
        return  CommentResource::collection($comments);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(StorecommentRequest $request)
    {
        Comment::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'comment' => $request->comment,
        ]);

        $data = [
            'status' => 'success',
            'message' => 'comment was added successfully'
        ];

        return  response()->json($data , 200);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\empolyee  $empolyee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment =  Comment::find($id);
        $comment->delete();
        return redirect('/comments');
    }
}
