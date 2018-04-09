<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Project;
use DB;

class SearchController extends Controller

{

   public function index()

{

return view('search');

}



public function search(Request $request){
  $output="";
  $search=0;

  if($request->filter_blog_checkbox  == 'true'){
    $blogs = Blog::where('name','LIKE','%'.$request->search."%")->get();

    if($blogs){
      foreach ($blogs as $key => $blog) {
        $output.='<div class="card card-small "><div class="card-image"><a style="color: black; text-decoration: none;" href="blogs/blog/'.$blog->blog_id.'">'.
        '<img  class="card-hero" src="data:image/png;base64,'.$blog->cover_image.'" alt=""></div>'.
        '<div class="card-content">'.
          '<h3>'.$blog->name.'</h3>'.
          '<p>'.$blog->description.'</p>'.
        '</div>'.
        '</a></div>';
        $search++;
      }
    }
  }

  if($request->filter_project_checkbox == 'true'){
    $projects = Project::where('name','LIKE','%'.$request->search."%")->get();

    if($projects){
      foreach ($projects as $key => $project) {
        $output.='<div class="card card-small"><div class="card-image"><a style="color: black; text-decoration: none;" href="projects/project/'.$project->project_id.'">'.
        '<img  class="card-hero" src="data:image/png;base64,'.$project->cover_image.'" alt=""></div>'.
        '<div class="card-content">'.
          '<h3>'.$project->name.'</h3>'.
          '<p>'.$project->description.'</p>'.
        '</div>'.
        '</a></div>';
        $search++;
      }
    }
  }




  $output = '<p>showing '.$search.' results</p>' . $output;

  return Response($output);
}





}
