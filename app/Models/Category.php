<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'categories';
    protected $fillable = [
      'name','image','url','target','count'
    ];
    protected $hidden = [
        'created_at','updated_at','deleted_at'
    ];

    public function sub_categories(){
        return $this->hasMany(SubCategory::class,'id','category_id');
    }
}
 