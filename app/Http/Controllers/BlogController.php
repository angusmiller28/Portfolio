<?php

namespace App\Http\Controllers;

use Auth;
use App\Blog;
use App\User;
use App\Admin;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class BlogController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('auth:admin');
  }

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
        'themeColour' => 'required',
        'blogDescription' => 'required'
      ]);


      /////////////////////////
      // add project to database
      ////////////////////////
      $blog = new Blog;
      $blog->name = $request->input('name');
      $blog->content = $request->input('blog-content');
      $blog->theme_colour = $request->input('themeColour');
      $blog->description = $request->input('blogDescription');

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


      // add admin details
      if (Auth::check() && Auth::user()->role == "admin")
      {
        $blog->admin_fk = Auth::user()->id;
      }

      // add created date
      $blog->created_on = date("M d, Y");

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
      $blog = Blog::where('id', $id)->get();

      // break results project into variables
      foreach ($blog as $b) {
        $blogId = $b->id;
        $blogName = $b->name;
        $blogContent = $b->content;
        $blogThemeColour = $b->theme_colour;
        $blogDisplayImage = $b->display_image;
        $blogFacebookShareFlag = $b->facebook_share_flag;
        $blogTwitterShareFlag = $b->twitter_share_flag;
        $blogRedditShareFlag = $b->reddit_share_flag;
        $blogGoogleShareFlag = $b->google_share_flag;
        $blogEmailShareFlag = $b->email_share_flag;
        $blogAdminId = $b->admin_fk;
        $blogCreatedOn = $b->created_on;
        $blogComments =  $b->comments;
      }

      foreach ($blogComments as $c) {
        if ($c->user_id != null){
          $id = $c->user_id;
          $user = User::where('id', $id)->get();

          foreach ($user as $u) {
            $blogCommentName = $u->name;
            $blogCommentAvatar = $u->avatar;
          }
        } else {
          $id = $c->admin_id;
          $admin = Admin::where('id', $id)->get();

          foreach ($admin as $a) {
            $blogCommentName = $a->name;
            $blogCommentAvatar = $a->avatar;
          }
        }
      }

      $blogAdmin = Admin::where('id', $blogAdminId)->get();
      foreach ($blogAdmin as $a) {
        $blogAdminName = $a->name;
        $blogAdminAvatar = $a->avatar;
      }


      return view('blog')
        ->with('blog', $blog)
        ->with('blogId', $blogId)
        ->with('blogComments', $blogComments)
        ->with('blogCommentName', $blogCommentName)
        ->with('blogCommentAvatar', $blogCommentAvatar)
        ->with('name', $blogName)
        ->with('content', $blogContent)
        ->with('themeColour', $blogThemeColour)
        ->with('displayImage', $blogDisplayImage)
        ->with('facebookShareFlag', $blogFacebookShareFlag)
        ->with('twitterShareFlag', $blogTwitterShareFlag)
        ->with('redditShareFlag', $blogRedditShareFlag)
        ->with('googleShareFlag', $blogGoogleShareFlag)
        ->with('emailShareFlag', $blogEmailShareFlag)
        ->with('adminName', $blogAdminName)
        ->with('adminAvatar', $blogAdminAvatar)
        ->with('createdOn', $blogCreatedOn);
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


    public function search(Request $request)

    {
      return 123;
    if($request->ajax())

    {

    $output="";
    $blogs = Blog::where('name','LIKE','%'.$request->search."%")->get();

    if($blogs)

    {

    foreach ($blogs as $key => $blog) {

    $output.='<tr>'.

    '<td>'.$blog->blog_id.'</td>'.

    '</tr>';

    }



    return Response($output);



       }



       }



    }
}
