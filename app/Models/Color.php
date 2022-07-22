<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;
    protected $table = 'colors';
    protected $fillable = [
        'color_value'
    ];

    public function attributes(){
        return $this->hasMany(Attribute::class,'color_id', 'id');        
    }

    public static function boot() {
        parent::boot();
        static::deleting(function($color) { // before delete() method call this
            $color->colors()->each(function($color) {
                $color->delete();
            });
        });
    }
}
