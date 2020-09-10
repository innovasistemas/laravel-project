<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    // Class' methods
    
    public function view1() 
    {
        $data = ['Pepe', 20];
        $jsonData = json_encode($data);
        return view('view2-controller')
            ->with('json', $jsonData)
            ->with('title', 'Personal data');
    }
    
    
    public function view2() 
    {
        $data = ['Pepe', 20];
        $data2 = ['name' => 'Any', 'age' => 10];
        $jsonData = json_encode($data);
        $jsonData2 = json_encode($data2);
        return view('view4-controller')
            ->with('json', $jsonData)
            ->with('title', 'Personal data')
            ->with('json2', $jsonData2);
    }
    
}
