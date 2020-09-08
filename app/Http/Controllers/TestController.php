<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    // Class' methods
    
    public function index() 
    {
//        return 'Test controller';
        return view('view2');
    }
}
