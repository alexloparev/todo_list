<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
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
    public function index(Request $request)
    {
        return view('home', ['token' => ""]);
//        return view('home', ['token' => auth()->user()->createToken('MyToken')->plainTextToken]);
//        return view('home', ['token' => auth()->user()->tokens()->get()->pluck('token')]);
    }
}
