<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paragraph extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'paragraphs';
    protected $fillable = [
      'title','thumb','image','paragraph','count','blog_id'
    ];

    protected $hidden = [
        'created_at','updated_at','deleted_at'
    ];

    public function blog(){
        return $this->hasOne(Blog::class,'id','blog_id');
    }
}
 