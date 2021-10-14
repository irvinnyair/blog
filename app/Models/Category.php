<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    //Asignacion Masiva (Todos los datos que podemos ingresar, estaran aqui)
    protected $fillable = ['name','slug'];

    //Retornar Slug en vez del ID
    public function getRouteKeyName()
    {
        return 'slug';
    }

    //Relacion uno a muchos
    public function posts(){
        return $this->hasMany(Post::class);
    }
}
