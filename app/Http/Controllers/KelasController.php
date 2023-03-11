<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index ()
    {
        $kelas = Kelas::with('users')->get();

        return view('dashboard.kelas.index', ['kelas' => $kelas]);
    }

    public function store (Request $request)
    {
        Kelas::create($request->all());

        return redirect()->back();
    }
}
