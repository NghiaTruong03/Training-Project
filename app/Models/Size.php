<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;
    
    protected $table = 'sizes';
    protected $fillable = [
        'size_value'
    ];
    public function attributes(){
        return $this->hasMany(Attribute::class,'size_id', 'id');        
    }

        
    public static function boot() {
        parent::boot();

        static::deleting(function($size) { // before delete() method call this
            $size->sizes()->each(function($size) {
                $size->delete();
            });
        });
    }
}
