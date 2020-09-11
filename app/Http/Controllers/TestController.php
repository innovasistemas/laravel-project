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
        $co = 4;
        $ca = 3;
        $h = sqrt(pow($co, 2) + pow($ca, 2));
        $triangleRectangle = ['co' => $co, 'ca' => $ca, 'h' => $h];
        
        $jsonData = json_encode($data);
        $jsonData2 = json_encode($data2);
        $jsonTriangleRectangle = json_encode($triangleRectangle);
        
        return view('view4-controller')
            ->with('json', $jsonData)
            ->with('title', 'Personal data')
            ->with('json2', $jsonData2)
            ->with('jsonTR', $jsonTriangleRectangle);
    }
    
    
    public function routePost()
    {
        return 'route post';
    }
    
}
