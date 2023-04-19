<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubSubCategory extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'sub_sub_categories';
    protected $fillable = [
      'name','image','url','target','count','sub_category_id'
    ];
    protected $hidden = [
        'created_at','updated_at','deleted_at'
    ];

  
    public function sub_category(){
        return $this->hasOne(SubCategory::class,'sub_category_id','id');
    }
}
