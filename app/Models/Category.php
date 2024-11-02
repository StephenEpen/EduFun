<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];    

    public function article(){
        $this->hasMany(Article::class);
    }

    public function writer(){
        $this->hasMany(Writer::class);
    }
}
