<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_cost' ,
        'alamat' ,
        'petugas_id' ,
        'selesai' ,
        'jenis_laundry' ,
        'total_berat' ,
        'total_biaya' ,
        'status_pembayaran' ,
        'status_member' ,
        'member_id' ,
        'diskon_member'
    ];

    public function petugas()
    {
        return $this->belongsTo(Petugas::class);
    }

    public function members()
    {
        return $this->belongsTo(Membership::class);
    }

}
