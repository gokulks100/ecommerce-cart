<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductStock extends Model
{
    use HasFactory ,SoftDeletes;

    protected $guarded = [];


    public function  product()
    {
        return $this->belongsTo(Product::class,'id','product_id');
    }

}
