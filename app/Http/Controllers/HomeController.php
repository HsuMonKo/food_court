<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
        $roles = Auth::user()->getRoleNames();
        if($roles[0] == 'admin'){
            return redirect()->route('categories.index');
        }else{
            return redirect()->route('template.home');
        }        
    }

    public function logout(){

    }
}
