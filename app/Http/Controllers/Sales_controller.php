<?php

namespace App\Http\Controllers;

use App\Models\Sales_model;
use Illuminate\Http\Request;

class Sales_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = Sales_model::all();
        return view('backend.sales.index', ['sales' => $sales]);
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
     * @param  \App\Models\Sales_model  $sales_model
     * @return \Illuminate\Http\Response
     */
    public function show(Sales_model $sales_model)
    {
        $sales_model::all();
        return view('backend.sales.detil', compact('sales_model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sales_model  $sales_model
     * @return \Illuminate\Http\Response
     */
    public function edit(Sales_model $sales_model)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sales_model  $sales_model
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sales_model $sales_model)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sales_model  $sales_model
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sales_model $sales_model)
    {
        //
    }
}
