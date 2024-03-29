<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    protected $table = 'mesa';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'nombre',
        'codigo_mesa',
        'inscritos',
        'recinto_id',
    ];

    public function recinto()
    {
        return $this->belongsTo('App\Recinto');
    }
}
