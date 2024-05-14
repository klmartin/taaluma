<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
    use HasFactory;

    protected $fillable = ['title','company','location','category' ,'nature'	,'deadline','salary','vacancy','description','responsibility','qualification','apply_link','apply_instrutions','created_at','updated_at'];
}



	