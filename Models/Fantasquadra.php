<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fantasquadra extends Model {

    protected $table = 'fantasquadra';

    protected $fillable = [
        'idFantasquadra', 'nome', 'crediti'
    ];

    public function fantaAllenatore() {
        return $this->belongsTo("App\Models\FantaAllenatore");
    }

    public function calciatore(){
        return $this->belongsToMany("App\Models\Calciatore");
    }

    public function lega(){
        return $this->belongToMany("App\Models\Lega");
    }

    public function like(){
        return $this->hasMany("App\Models\Like");
    }
}

?>