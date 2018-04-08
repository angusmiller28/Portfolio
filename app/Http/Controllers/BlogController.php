<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $blogs = Blog::all();

      return view('/blogs')->with('blogs', $blogs);
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
    public function store(Request $request)
    {
      $this->validate($request, [
        'name' => 'required',
        'blog-content' => 'required',
        'coverImage' => 'required',
        'displayImage' => 'required',
        'themeColour' => 'required'
      ]);

      /////////////////////////
      // add project to database
      ////////////////////////
      $blog = new Blog;
      $blog->name = $request->input('name');
      $blog->content = $request->input('blog-content');
      $blog->theme_colour = $request->input('themeColour');

      // Validate and add coverImage to database
      if ($request->hasFile('coverImage')) {
        if($request->file('coverImage')->isValid()) {
            try {
                $file = file_get_contents($request->file('coverImage')->path());
                $image = base64_encode($file);
                $blog->cover_image = $image;

            } catch (FileNotFoundException $e) {
                echo "catch";

            }
        }
      }

      // Validate and add displayImage to database
      if ($request->hasFile('displayImage')) {
        if($request->file('displayImage')->isValid()) {
            try {
                $file = file_get_contents($request->file('displayImage')->path());
                $image = base64_encode($file);
                $blog->display_image = $image;

            } catch (FileNotFoundException $e) {
                echo "catch";

            }
        }
      }

      // if facebook share checkbox is selected add to database
      if($request->input('Facebook') == 'facebook'){
        $blog->facebook_share_flag = '1';
      }
      if($request->input('Twitter') == 'twitter'){
        $blog->twitter_share_flag = '1';
      }
      if($request->input('Reddit') == 'reddit'){
        $blog->reddit_share_flag = '1';
      }
      if($request->input('Google+') == 'google'){
        $blog->google_share_flag = '1';
      }
      if($request->input('Email') == 'email'){
        $blog->email_share_flag = '1';
      }

      $blog->save();

      return redirect('/admin')->with('success', 'Blog Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog, $id)
    {
      $blog = Blog::where('blog_id', $id)->get();

      // break results project into variables
      foreach ($blog as $b) {
        $blogName = $b->name;
        $blogContent = $b->content;
        $blogDisplayImage = $b->display_image;
        $blogFacebookShareFlag = $b->facebook_share_flag;
        $blogTwitterShareFlag = $b->twitter_share_flag;
        $blogRedditShareFlag = $b->reddit_share_flag;
        $blogGoogleShareFlag = $b->google_share_flag;
        $blogEmailShareFlag = $b->email_share_flag;
      }

      return view('blog')
        ->with('name', $blogName)
        ->with('content', $blogContent)
        ->with('displayImage', $blogDisplayImage)
        ->with('displayImage', $blogDisplayImage)
        ->with('facebookShareFlag', $blogFacebookShareFlag)
        ->with('twitterShareFlag', $blogTwitterShareFlag)
        ->with('redditShareFlag', $blogRedditShareFlag)
        ->with('googleShareFlag', $blogGoogleShareFlag)
        ->with('emailShareFlag', $blogEmailShareFlag);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      // delete
      $blog = Blog::find($id);
      $blog->delete();

      // redirect
      return Redirect('/admin')->with('success', 'Blog Deleted!');
    }
}
