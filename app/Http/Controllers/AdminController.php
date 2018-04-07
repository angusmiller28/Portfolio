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
  protected $redirectTo = '/admin/login';

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
      if(Auth::user()->job_title != "Student")
        return redirect('/admin/profile')->with('error', 'You dont have permission!');  

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

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin, $id)
    {
      $admin = Admin::where('id', $id)->get();

      // break results admin into variables
      foreach ($admin as $a) {
        $adminName = $a->name;
        $adminAvatar = $a->avatar;
        $adminEmail = $a->email;
        $adminJobTitle = $a->job_title;
      }

      return view('account')
        ->with('name', $adminName)
        ->with('avatar', $adminAvatar)
        ->with('email', $adminEmail)
        ->with('jobTitle', $adminJobTitle);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin, $id)
    {
      $admin = Admin::where('id', $id)->delete();

      return redirect('/admin')->with('success', 'Admin Deleted');
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
