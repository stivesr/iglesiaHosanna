<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $table = 'members';

    protected $primaryKey = 'idMember';

    protected $fillable = [
        'identification',
        'firstName',
        'lastName',
        'birthdate',
        'address',
        'phone',
        'email',
        'idChurch',
    ];

    public function church()
    {
        return $this->belongsTo(Church::class, 'idChurch');
    }
    
}
