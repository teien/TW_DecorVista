<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;




class Consultation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'designer_id',
        'start_time',
        'end_time',
        'status',
        'notes',
    ];

    // Quan hệ với model User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Quan hệ với model InteriorDesigner
    public function designer()
    {
        return $this->belongsTo(InteriorDesigner::class, 'designer_id');
    }
}
