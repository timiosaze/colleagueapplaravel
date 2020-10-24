<?php

namespace App\Http\Controllers;

use App\Colleague;
use Auth;
use Illuminate\Http\Request;

class ColleagueController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $colleagues = Colleague::where('user_id', Auth::id())->orderBy('id', 'desc')->paginate(7);

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
        $this->formsValidation();
        $colleague = new Colleague;
        $colleague->name = request('name');
        $colleague->body = request('body');
        $colleague->user_id = Auth::id();
        $colleague->rating = (float) request('rating');
        
        if($colleague->save()){
            return redirect('/colleague')->with('success', 'Successfully saved');
        } else {
            return redirect('/colleague')->with('failure', 'Not saved');
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
        $colleague = Colleague::where('user_id', Auth::id())->findOrFail($id);

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
        $colleague = Colleague::where('user_id', Auth::id())->findOrFail($id);

        $this->formsValidation();
        $colleague->name = request('name');
        $colleague->body = request('body');
        $colleague->rating = (float) request('rating');
        
        if($colleague->save()){
            return redirect('/colleague')->with('success', 'Successfully updated');
        } else {
            return redirect('/colleague')->with('failure', 'Not updated');
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
        $colleague = Colleague::where('user_id', Auth::id())->findOrFail($id);

        if($colleague->delete()){
            return redirect('/colleague')->with('success', 'Successfully deleted');
        } else {
            return redirect('/colleague')->with('failure', 'Not deleted');
        }
    }
    public function formsValidation(){
        return request()->validate([
            'name' => 'required',
            'body' => 'required',
            'rating' => 'required',
        ]);
    }
}
