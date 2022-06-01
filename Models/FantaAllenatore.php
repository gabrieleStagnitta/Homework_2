<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class fantaAllenatore extends Model {

    protected $table = 'fantaAllenatore';

    protected $fillable = [
        'id', 'nome', 'nickname','password','idFantasquadra'
    ];

    protected $hidden = [
        "password"  
    ];

    public function like(){
        return $this->hasMany("App\Models\Like");
    }

    // protected $casts = [
    //     'content' => 'array'
    // ];

    // public function fantasquadra() {
    //     return $this->belongsTo("App\Models\Fantasquadra");
    // }

    // public function getLikedAttribute(){
    //     $user = User::find(session('user_id'))->first();
    //     return $this->likes()->where('id', $user->id)->exists();
    // }

    // public function getTimeAttribute(){
    //     return $this->created_at->diffForHumans(null, true, true);
    // }
}

?>