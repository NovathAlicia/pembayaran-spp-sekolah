<?php

namespace App\Models;

use App\Models\Spp;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pembayaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'petugas',
        'spp_id',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function spp()
    {
        return $this->belongsTo(Spp::class);
    }
}
