<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
       return view('tester');
    }
    public function pay()
    {
        return view('products.pay');
    }
}
