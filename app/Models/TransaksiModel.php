<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_cost',
        'alamat',
        'nama_petugas',
        'selesai',
        'jenis_laundry',
        'total_berat',
        'status_pembayaran',
        'diskon_member'
    ];

}
