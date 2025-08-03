<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function index()
    {
        return view('obat.index');
    }

    public function edit(Obat $obat)
    {
        $data['obat'] = $obat;
        return view('obat.edit', $data);
    }
}
