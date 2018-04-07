<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Project;
use App\User;
use App\Admin;
use App\Resume;
use App\Reference;
use App\Education;
use Auth;
use Image;

class AdminController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $blogs = Blog::all();
      $projects = Project::all();
      $users = User::all();
      $admins = Admin::all();
      $resumes = Resume::all();
      $references = Reference::all();
      $educations = Education::all();
      $resumeCount = Resume::count();
      $resumeSet = false;

      if($resumeCount > 0)
          $resumeSet = true;

      return view('admin')
      ->with('blogs', $blogs)
      ->with('users', $users)
      ->with('admins', $admins)
      ->with('references', $references)
      ->with('educations', $educations)
      ->with('resumes', $resumes)
      ->with('resumeSet', $resumeSet)
      ->with('projects', $projects);
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
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:6|confirmed',
        'job_title' => 'required',
      ]);

      return 123;
    }

    public function profile(){
      return view('adminProfile', array('admin' => Auth::user()));
    }

    public function update_avatar(Request $request){
      // Handle admin upload of avatar
      if($request->hasFile('avatar')){
        $avatar = $request->file('avatar');
        $filename = time() . '.' . $avatar->getClientOriginalExtension();
        Image::make($avatar)->resize(300, 300)->save(public_path('/uploads/avatars/' . $filename));

        $admin = Auth::user();
        $admin->avatar = $filename;
        $admin->save();
      }

      return view('adminProfile', array('admin' => Auth::user()));
    }
}
