<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesignerProfile extends Model
{
    use HasFactory;
    protected $table = 'designer_profiles';

    protected $primaryKey = 'designer_id';

    protected $fillable = [
        'designer_id',
        'first_name',
        'last_name',
        'bio',
        'company_name',
        'website_url',
        'fb_url',
        'twitter_url',
        'instagram',
        'linkedin',
        'skype',
        'profile_image_url',
        'contact_number',
        'contact_email',
    ];

    /**
     * Quan hệ với bảng InteriorDesigners
     * Một hồ sơ designer sẽ thuộc về một nhà thiết kế.
     */
    public function designer(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(InteriorDesigner::class, 'designer_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'designer_id', 'id');
    }



}
