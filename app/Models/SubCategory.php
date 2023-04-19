<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubCategory extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'sub_categories';
    protected $fillable = [
      'name','image','url','target','count','category_id'
    ];
    protected $hidden = [
        'created_at','updated_at','deleted_at'
    ];

    public function sub_categories(){
        return $this->hasMany(SubSubCategory::class,'id','sub_category_id');
    }

    public function category(){
        return $this->hasOne(Category::class,'category_id','id');
    }
}
 