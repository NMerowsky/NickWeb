<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccomsController extends Controller
{
    public function index(){
    	return view('accoms.index');
    }
}
