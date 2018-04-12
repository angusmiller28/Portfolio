<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Comment;
use App\ProductImage;
use App\ProductVideo;
use App\User;
use App\Admin;
use Auth;

class ProductController extends Controller
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
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      // Start the session
      session_start();

      $product = Product::where('id', $id)->get();

      // break results project into variables
      foreach ($product as $p) {
        $productId = $p->id;
        $productName = $p->name;
        $productPrice = $p->price;
        $productDisplayImage = $p->display_image;
        $productComments =  $p->comments;
      }

      $commentName = "";
      $commentAvatar = "";
      $comments = array();

      foreach ($productComments as $c) {
        if ($c->user_id != null){
          $id = $c->user_id;
          $user = User::where('id', $id)->get();

          foreach ($user as $u) {
            $commentName = $u->name;
            $commentAvatar = $u->avatar;
          }
        } else {
          $id = $c->admin_id;
          $admin = Admin::where('id', $id)->get();

          foreach ($admin as $a) {
            $commentName = $a->name;
            $commentAvatar = $a->avatar;
          }
        }

        // store user data into array
        $comments[] = [
          'name' => $commentName,
          'rating' => $c->rating,
          'avatar' => $commentAvatar,
          'comment' => $c->comment
        ];
      }

      $productImages = ProductImage::where('product_id', $id)->get();
      $productVideos = ProductVideo::where('product_id', $id)->get();

      return view('product')
        ->with('product', $product)
        ->with('productId', $productId)
        ->with('comments', $comments)
        ->with('commentName', $commentName)
        ->with('commentAvatar', $commentAvatar)
        ->with('productName', $productName)
        ->with('productPrice', $productPrice)
        ->with('productDisplayImage', $productDisplayImage)
        ->with('productImages', $productImages)
        ->with('productVideos', $productVideos);
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
