<?php

namespace App\Http\Controllers;

use App\OrderConfirmation;
use Illuminate\Http\Request;

class OrderConfirmationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('order_confirmation');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OrderConfirmation  $orderConfirmation
     * @return \Illuminate\Http\Response
     */
    public function show(OrderConfirmation $orderConfirmation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OrderConfirmation  $orderConfirmation
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderConfirmation $orderConfirmation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OrderConfirmation  $orderConfirmation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrderConfirmation $orderConfirmation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OrderConfirmation  $orderConfirmation
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderConfirmation $orderConfirmation)
    {
        //
    }
}
