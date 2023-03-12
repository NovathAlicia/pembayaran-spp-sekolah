<?php

namespace App\Http\Controllers;

use auth;
use App\Models\Spp;
use App\Models\User;
use App\Models\Pembayaran;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index ()
    {
        $transaksi = Pembayaran::with('user', 'spp')->get();
        $siswa     = User::where('role', 'siswa')->get();
        $spp       = Spp::all();
        
        return view('dashboard.pembayaran.index', ['transaksi' => $transaksi, 'siswa' => $siswa, 'spp' => $spp]);
    }
    
    public function store (Request $request)
    {
        $request['petugas'] = Auth::user()->name;

        $validatedData = $request->validate([
            'user_id' => 'required',
            'spp_id'  => 'required',
            'petugas' => 'required',
        ]);

        Pembayaran::create($validatedData);

        return redirect()->back();
    }
}
