<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Project;
use App\User;
use App\Resume;
use App\Reference;
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
      $resumes = Resume::all();
      $references = Reference::all();
      $resumeCount = Resume::count();
      $resumeSet = false;

      if($resumeCount > 0)
          $resumeSet = true;

      return view('admin')
      ->with('blogs', $blogs)
      ->with('users', $users)
      ->with('references', $references)
      ->with('resumes', $resumes)
      ->with('resumeSet', $resumeSet)
      ->with('projects', $projects);
    }
}
