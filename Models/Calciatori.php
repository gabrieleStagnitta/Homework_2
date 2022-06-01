<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calciatore extends Model {

    protected $table = 'calciatore';

    protected $fillable = [
        'id','ruolo','nome','squadra'.'quotazione','infortunato'
    ];
    
    public function squadra(){
        return $this->belongsTo("App\Models\Squadra");
    }

    public function fantasquadra(){
        return $this->belongsToMany("App\Models\Fantasquadra");
    }

}

?>