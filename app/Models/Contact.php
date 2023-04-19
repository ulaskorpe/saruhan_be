<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'contacts';
    protected $fillable = [
      'title','paragraph','date','name','phone','email'
    ];

    protected $hidden = [
        'created_at','updated_at','deleted_at'
    ];

 
}
