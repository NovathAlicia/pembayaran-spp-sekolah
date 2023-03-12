<?php

namespace App\Models;

use App\Models\Pembayaran;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Spp extends Model
{
    use HasFactory;

    protected $fillable = [
        'nominal',
        'tahun',
    ];

    public function pembayarans()
    {
        return $this->hasMany(Pembayaran::class);
    }
}
