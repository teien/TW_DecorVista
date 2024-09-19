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
    protected $fillable = [
        'user_id',
        'specialization',
        'portfolio',
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

    // Các quan hệ khác nếu có thể được thêm ở đây
}
