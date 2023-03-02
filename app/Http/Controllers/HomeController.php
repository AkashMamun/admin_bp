<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Redirect;

class HomeController extends Controller
{
    public function index(Request $request){
        if(Auth::check()){
            return Redirect::route('dashboard');
        }
        else{
            return Redirect::route('login');
        }
    }
}
