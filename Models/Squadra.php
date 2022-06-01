<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Squadra extends Model {

    protected $table = 'squadra';

    protected $fillable = [
        'id','nome'
    ];

    public function calciatore(){
        return $this->hasMany("App\Models\Calciatore");
    }
}
?>