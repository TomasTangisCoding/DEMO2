<?php

namespace App\Http\Controllers\Controls;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function home (Request $request){
        
        
        if(!Auth::user()->is_admin){
            return redirect('/')->withErrors('你沒有權限');
        }
        return view('controls.home');
    }
}
