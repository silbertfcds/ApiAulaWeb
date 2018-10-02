<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public $timestamps = false;
    
    protected $fillable =[
    	'descricao'
    ];
}
