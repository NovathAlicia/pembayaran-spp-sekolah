<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kelas;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index ()
    {
        $siswa = User::with('kelas')->where('role', 'siswa')->get();
        $kelas = Kelas::all();
        
        return view('dashboard.siswa.index', ['siswa' => $siswa, 'kelas' => $kelas]);
    }

    public function store (Request $request)
    {
        $request['password'] = bcrypt($request['password']);
        $request['role']     = 'siswa';
        
        User::create($request->all());

        return redirect()->back();
    }
}
