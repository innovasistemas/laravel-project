<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
//    public $timestamps = false; //Desactiva los timestamps
    protected $table = 'professions';
    protected $fillable = ['description'];
    
    
    public function users()
    {
        return $this->hasMany(User::class, 'professions_id');
//        return response()->json($this->hasMany(User::class));
    }
    
    
    public function isBackend()
    {
        return $this->description == 'Desarrollador back-end';
    }
    
}
