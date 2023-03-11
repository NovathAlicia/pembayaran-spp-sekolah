<?php

namespace App\Http\Controllers;

use App\Models\Spp;
use Illuminate\Http\Request;

class SppController extends Controller
{
    public function index ()
    {
        $spp = Spp::all();
        
        return view('dashboard.spp.index', ['spp' => $spp]);
    }

    public function store (Request $request)
    {
        Spp::create($request->all());

        return redirect()->back();
    }
}
