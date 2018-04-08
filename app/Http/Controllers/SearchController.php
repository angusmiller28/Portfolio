<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class SearchController extends Controller

{

   public function index()

{

return view('search');

}



public function search(Request $request)

{
  return 1234;


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

}


return $output;
return Response($output);



   }



   }





}
