<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'contacts';
    protected $fillable = [
      'title','thumb','daimagete','author','date','category_id','sub_category_id','sub_sub_category_id'
    ];

    protected $hidden = [
        'created_at','updated_at','deleted_at'
    ];

    public function category(){
        return $this->hasOne(Category::class,'id','category_id');
    }
    public function sub_category(){
        return $this->hasOne(SubCategory::class,'id','sub_category_id');
    }
    public function sub_sub_category(){
        return $this->hasOne(SubSubCategory::class,'id','sub_sub_category_id');
    }

    public function paragraphs(){
        return $this->hasMany(Paragraph::class,'category_id','id');
    }

}
 