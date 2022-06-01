<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Leghe extends Model {

    protected $table = 'leghe';

    protected $fillable = [
        'idLega', 'nome'
    ];

    public function fantasquadra(){
        return $this->belongsToMany("App\Models\Fantasquadra");
    }
}

?>