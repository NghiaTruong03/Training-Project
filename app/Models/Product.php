<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'pro_name',
        'pro_price',
        'pro_sale_price',
        'pro_quantity',
        'pro_description',
        'pro_image',
        'category_id'
    ];
    public function category(){
        return $this->belongsTo(Category::class,'category_id', 'id');        
    }

    public function sub_images(){
        return $this->hasMany(SubImage::class,'product_id');        
    }

    public function attributes(){
        return $this->hasMany(Attribute::class,'product_id');
    }
    
        public function getListProduct($request){
            $data = $this->with('category','sub_images');
            return $data->orderBy('id', 'desc')->get();
        }
    
    public static function boot() {
        parent::boot();

        static::deleting(function($product) { // before delete() method call this
            $product->sub_images()->each(function($product) {
                $product->delete();
            });
        });
    

        static::deleting(function($product) { // before delete() method call this
            $product->attributes()->each(function($product) {
                $product->delete();
            });
        });
    }
}
