<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
        protected $fillable = ['name','description','author_id',
            'category_id','count','is_not_for_borrow'];
    
    public function author(){
        return $this->belongsTo(Author::class,'author_id');
    }
    
    public function category(){
        return $this->belongsTo(BookCategory::class,'category_id');
    }
}
