<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = [
        'cate_name',
        'cate_status',
        'parent_id'
    ];

    public function products(){
        return $this->hasMany(Product::class,'category_id', 'id');        
    }

    public function childrenCategories()
    {
        return $this->hasMany(Category::class,'parent_id', 'id');   
    }

    public function parentCategories()
    {
        return $this->hasOne(Category::class,'id', 'parent_id');   
    }

    public function getListCategory($request){
        $data = $this->with('childrenCategories','parentCategories');
        return $data->orderBy('id','desc')->get();
    }

    public static function boot() {
        parent::boot();

        static::deleting(function($product) { // before delete() method call this
            $product->products()->each(function($product) {
                $product->delete();
            });
        });
    }
}
