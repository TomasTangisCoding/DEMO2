<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function home (){
        
        return view('home',[
           'productName'=>'PN123' 
        ]
    );
    }
}
