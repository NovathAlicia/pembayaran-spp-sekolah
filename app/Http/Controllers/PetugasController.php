<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function index ()
    {
        $petugas = User::where('role', 'petugas')->get();

        return view('dashboard.petugas.index', ['petugas' => $petugas]);
    }
    
    public function store (Request $request)
    {
        $request['role']     = 'petugas';
        $request['password'] = bcrypt($request['password']);

        User::create($request->all());

        return redirect()->back();
    }
}
