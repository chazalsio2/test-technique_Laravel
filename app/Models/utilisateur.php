<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class utilisateur extends Model
{
    // public function relation(){
    //     $this->hasOne(Relation::class);
    // }
    use HasFactory;

    protected $fillable = [
        'id',
        'pseudo	',
        'email',
        'password',  
        'ip',
        'date_inscription',
        'nom',
        'id_relation' 
    ];


    public function utilisateur(){
        $this->hasOne(Relation::class);
    }
}
