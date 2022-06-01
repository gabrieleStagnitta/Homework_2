<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Like extends Model {

    protected $table = 'likefantasquadra';

    protected $fillable = [
        'idFantaAllenatore','idFantaSquadra'
    ];

    public function fantaAllenatore() {
        return $this->belongsTo("App\Models\FantaAllenatore");
    }

    public function fantaSquadra(){
        return $this->belongsTo("App\Models\Fantasquadra");
    }
}
    
?>