<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use DB;
use Illuminate\Support\Facades\DB; //O la anterior
use App\Models\Profession;
use App\Models\User;


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
    
    
    public function dbSelect($title = '')
    {
        $query = 'SELECT id FROM professions WHERE description = ?';
//        $profession = DB::select($query, ['Desarrollador back-end']);
        $profession = DB::select($query, [$title]);
        return $profession;
//        return $profession[0]->id;
    }

    
    public function dbDelete($id = 0)
    {
        $query = 'DELETE FROM professions WHERE id = ?';
        $profession = DB::delete($query, [$id]);
        return $profession;
    }
    
    
    public function dbInsert($title = '')
    {
        $query = 'INSERT INTO professions (description, created_at)
                  VALUES (:description, :created_at) ';
        $arrayData = ['description' => $title, 'created_at' => now()];
        $profession = DB::insert($query, $arrayData);
        return (string)$profession;
//        return (array)$profession; //devuelve array [true]
    }

    
    public function modelInsert($title = '')
    {
//        $arrayData = ['description' => $title, 'created_at' => now()];
        $arrayData = ['description' => $title];
        return Profession::create($arrayData);
    }
    
    
    public function modelSelect()
    {
        return Profession::all();
    }
    
    
    public function viewProfessions() 
    {
        $profession = new Profession();
        return view('view-professions')
            ->with('professions', Profession::all())
            ->with('title', 'Professions');
    }

    
    public function modelProfessionsMethod() 
    {
        $profession = new Profession();
        return (array)$profession->isBackend();
    }
    
    
    public function modelProfessionsUser()
    {
//        $user = new User();
        $user = User::first();
        return $user->profession()->where('id', 1)->get();
//        return $user->profession()->get();
    }
    

    public function modelUsersProfession()
    {
        $profession = Profession::first();
        return $profession->users()->get();
    }




    public function routePost()
    {
        return 'route post';
    }
    
}
