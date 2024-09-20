<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class InteriorDesigner extends Authenticatable
{
    use HasFactory;

    // Tên bảng tương ứng trong cơ sở dữ liệu
    protected $table = 'interior_designers';
    protected $primaryKey = 'designer_id';
    protected $fillable = [
        'designer_id',
        'user_id',
        'specialization',
        'years_of_experience',
    ];

    // Quan hệ với model User
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function profile()
    {
        return $this->hasOne(DesignerProfile::class, 'designer_id');
    }

    public function consultations(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Consultation::class, 'designer_id');
    }
}
