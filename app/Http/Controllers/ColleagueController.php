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
        $colleagues = Colleague::orderBy('id', 'desc')->get();

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
        request()->validate([
            'name' => 'required',
            'body' => 'required',
            'rating' => 'required',
        ]);
        $colleague = new Colleague;
        $colleague->name = request('name');
        $colleague->body = request('body');
        $colleague->rating = (float) request('rating');
        
        if($colleague->save()){
            return redirect('/colleague');
        }
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
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $colleague = Colleague::findOrFail($id);

        return view('colleagues.edit', compact("colleague"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $colleague = Colleague::findOrFail($id);

        request()->validate([
            'name' => 'required',
            'body' => 'required',
            'rating' => 'required',
        ]);
        $colleague->name = request('name');
        $colleague->body = request('body');
        $colleague->rating = (float) request('rating');
        
        if($colleague->save()){
            return redirect('/colleague');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $colleague = Colleague::findOrFail($id);

        if($colleague->delete()){
            return redirect('/colleague');
        }
    }
}
