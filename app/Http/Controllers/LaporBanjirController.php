<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporBanjirController extends Controller
{
    public function form()
    {
        return view('lapor-banjir.form');
    }

    public function kirim(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'kecamatan' => 'required',
            'desa' => 'required',
            'tinggi_genangan' => 'required|numeric',
        ]);

        return view('lapor-banjir.konfirmasi', [
            'laporan' => $validated
        ]);
    }
}