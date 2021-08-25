<?php

namespace App\Http\Controllers;

use App\Models\Furniture;
use App\Models\Ajax;
use Illuminate\Http\Request;


class AjaxController extends Controller
{
    public function save(Request $request){
        $ajax = new Ajax();
        $ajax->fill($request->all());
        $ajax->save();
        return $ajax;
    }
    public function display(){
        $ajax = Ajax::all();
        return $ajax;
    }
}
class FurnitureController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Furniture  $furniture
     * @return \Illuminate\Http\Response
     */
    public function show(Furniture $furniture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Furniture  $furniture
     * @return \Illuminate\Http\Response
     */
    public function edit(Furniture $furniture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Furniture  $furniture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Furniture $furniture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Furniture  $furniture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Furniture $furniture)
    {
        //
    }
}
