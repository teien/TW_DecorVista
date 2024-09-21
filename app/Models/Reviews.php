<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = ['user_id','username' , 'comment'];

    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }
}
