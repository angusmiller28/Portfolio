<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Project;
use App\Product;
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
        $output.='<div class="card card-small "><div class="card-image"><a style="color: black; text-decoration: none;" href="/blogs/blog/'.$blog->id.'">'.
        '<img  class="card-hero" src="/uploads/blogs/'.$blog->cover_image.'" alt=""></div>'.
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
        $output.='<div class="card card-small"><div class="card-image"><a style="color: black; text-decoration: none;" href="/projects/project/'.$project->id.'">'.
        '<img  class="card-hero" src="/uploads/projects/'.$project->cover_image.'" alt=""></div>'.
        '<div class="card-content">'.
          '<h3>'.$project->name.'</h3>'.
          '<p>'.$project->description.'</p>'.
        '</div>'.
        '</a></div>';
        $search++;
      }
    }
  }

  if($request->filter_product_checkbox == 'true'){
    $products = Product::where('name','LIKE','%'.$request->search."%")->get();

    if($products){
      foreach ($products as $key => $product) {
        $output.='<div class="card card-small"><div class="card-image"><a style="color: black; text-decoration: none;" href="/product/'.$product->id.'">'.
        '<img  class="card-hero" src="/uploads/products/'.$product->display_image.'" alt=""></div>'.
        '<div class="card-content">'.
          '<h3>'.$product->name.'</h3>'.
          '<p>'.$product->description.'</p>'.
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
