<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    use HasFactory;
    protected $table = 'petugass';
    protected $fillable = [
        'nama_petugas' ,
        'username' ,
        'password' ,
        'no_telepon' ,
        'foto' ,
        'status' ,
    ];
}
