<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;
    protected $table = 'members';
    protected $fillable = [
        'nama_member' ,
        'alamat' ,
        'no_telephone' ,
        'jenis_kelamin' ,
        'status',
    ];

}
