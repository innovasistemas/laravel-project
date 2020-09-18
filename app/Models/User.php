<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class User extends Model
{
    protected $table = 'users';
    
    
    public function profession()
    {
        return $this->belongsTo(Profession::class);
//        return response()->json($this->belongsTo(Profession::class));
    }
    
}
