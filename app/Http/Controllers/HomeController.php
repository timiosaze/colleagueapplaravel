<?php

namespace App\Http\Controllers;

use App\Colleague;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $colleagues = Colleague::where('user_id', Auth::id())->orderBy('id', 'desc')->paginate(7);

        return view('colleagues.index', compact("colleagues"));
    }
}
