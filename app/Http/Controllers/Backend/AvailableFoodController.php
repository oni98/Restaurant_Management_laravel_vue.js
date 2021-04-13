<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Available_Food;
use Illuminate\Http\Request;

class AvailableFoodController extends Controller
{
    private $root = 'backend.pages.';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view($this->root.'available_foods');
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
     * @param  \App\Models\Backend\Available_Food  $available_Food
     * @return \Illuminate\Http\Response
     */
    public function show(Available_Food $available_Food)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Backend\Available_Food  $available_Food
     * @return \Illuminate\Http\Response
     */
    public function edit(Available_Food $available_Food)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Backend\Available_Food  $available_Food
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Available_Food $available_Food)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Backend\Available_Food  $available_Food
     * @return \Illuminate\Http\Response
     */
    public function destroy(Available_Food $available_Food)
    {
        //
    }
}
