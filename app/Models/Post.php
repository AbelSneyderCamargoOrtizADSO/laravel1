<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // CAMPOS DONDE SE PODRAN INSERTAR DATOS EN LA BASE DE DATOS
    protected $fillable = [
        'title',
        'slug',
        'content',
    ];

    // DECLARAR EN QUE CAMPOS NO SE PUEDE SUBIR INFORMACION
    /*
    protected $guarded = [
        'is_active',
    ];
    */

    protected $table = "post";

    protected function casts() : array{
        return [
            "published_at" => "datetime",
        ];
    }

    protected function title() : Attribute{
        return Attribute::make(
            // MUTADOR
            set: function($value){
                return strtolower($value);
            },

            // ACCESOR
            get: function($value){
                return ucfirst($value);
            }
        );
    }

    
    public function getRouteKeyName(){
        return 'slug';
    }
}
