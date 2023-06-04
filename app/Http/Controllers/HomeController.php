<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $role = Auth::user()->role();
        $id = Auth::user()->id();
        //Записываем id пользователя в сессию, для дальнейшего использования в проекте
        session(['user_id' => $id]);
        
        return view('home', ['role' => $role]);
    }
}
