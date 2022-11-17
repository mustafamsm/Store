<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=[
        'Product_name',
        'description','section_id'
    ];

    public function section(){
        return $this->belongsTo(Sections::class,'section_id');
    }
}
