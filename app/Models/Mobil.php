<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;
    protected $fillable = ['merk', 'model', 'nomor_plat', 'tarif', 'status', 'tanggal_awal_ready', 'tanggal_akhir_ready', 'image'];
    public function user()
    {
        return $this->belongsToMany(User::class);
    }
    public function pembelian()
    {
        return $this->hasMany(Sewa::class, 'mobil_id');
    }
}


