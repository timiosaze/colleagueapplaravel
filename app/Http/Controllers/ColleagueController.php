<?php

namespace App\Http\Controllers;

use App\Colleague;
use Illuminate\Http\Request;

class ColleagueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $colleagues = Colleague::all();

        return view('colleagues.index', compact("colleagues"));
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
     * @param  \App\Colleague  $colleague
     * @return \Illuminate\Http\Response
     */
    public function show(Colleague $colleague)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Colleague  $colleague
     * @return \Illuminate\Http\Response
     */
    public function edit(Colleague $colleague)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Colleague  $colleague
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Colleague $colleague)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Colleague  $colleague
     * @return \Illuminate\Http\Response
     */
    public function destroy(Colleague $colleague)
    {
        //
    }
}
