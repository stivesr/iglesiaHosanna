<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Church extends Model
{
    use HasFactory;

    protected $primaryKey = 'idChurch';

    protected $fillable = [
        'identification',
        'name',
        'location',
        'phone',
        'email',
        'image',
    ];

    public function members()
    {
        return $this->hasMany(Member::class, 'idChurch');
    }
    
}
