<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;
    protected $table = 'attributes';
    protected $fillable = [
        'product_id',
        'color_id',
        'size_id'
    ];

    public function products(){
        return $this->belongsTo(Product::class,'product_id', 'id');        
    }
    public function colors(){
        return $this->belongsTo(Product::class,'color_id', 'id');        
    }
    public function sizes(){
        return $this->belongsTo(Product::class,'size_id', 'id');        
    }

    public function getAttribute($request){
        $data = $this->with('products','sizes')->get();
        return $data;
    }
}
