<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubImage extends Model
{
    use HasFactory;
    protected $table = 'sub_images';
    protected $fillable=[
        'sub_image',
        'product_id'
    ];
    public function products(){
        return $this->belongsTo(Product::class,'product_id', 'id');        
    }


}
