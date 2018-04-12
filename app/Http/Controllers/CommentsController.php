<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\User;
use App\Blog;
use App\Comment;
use Auth;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
      $this->validate($request, array(
        'comment' => 'required|min:5|max:2000'
      ));

      $blog = Blog::find($id);

      $comment = new Comment();

      $comment->comment = $request->comment;
      $comment->approved = true;
      $comment->blog()->associate($blog);

      if (Auth::check() && Auth::user()->role == "admin" ){
        $admin = Admin::find(Auth::user()->id);
        $comment->admin()->associate($admin);
      }  else {
        $user = User::find(Auth::user()->id);
        $comment->user()->associate($user);
      }

      $comment->save();

      return redirect('/blogs/blog/'.$blog->id)
        ->with('success', 'Comment added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}