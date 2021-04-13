<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Add_Menu;
use Illuminate\Http\Request;

class AddMenuController extends Controller
{
    private $root = 'backend.pages.';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view($this->root.'addMenu');
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
     * @param  \App\Models\Backend\Add_Menu  $add_Menu
     * @return \Illuminate\Http\Response
     */
    public function show(Add_Menu $add_Menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Backend\Add_Menu  $add_Menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Add_Menu $add_Menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Backend\Add_Menu  $add_Menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Add_Menu $add_Menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Backend\Add_Menu  $add_Menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Add_Menu $add_Menu)
    {
        //
    }
}
