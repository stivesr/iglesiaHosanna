<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Church extends Model
{
    use HasFactory;

    protected $table = 'churches';

    protected $primaryKey = 'idChurch';

    protected $fillable = [
        'identification',
        'name',
        'location',
        'phone',
        'email',
    ];

    public function members()
    {
        return $this->hasMany(Member::class, 'idChurch');
    }
    
}
