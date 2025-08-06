<?php

namespace App\Http\Controllers;

use App\Models\Konsultasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class KonsultasiController extends Controller
{

    public function index()
    {
        $konsultasi = Konsultasi::with('user')->latest()->get(); // pakai eager loading
        return view('admin.l-konsultasi', compact('konsultasi'));
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('konsultasi');
    }

    public function store(Request $request)
    {
        $request->validate([
            'umur' => 'required|integer|min:10|max:100',
            'jenis_kulit' => 'required|in:Normal,Kering,Berminyak,Kombinasi,Sensitif',
            'keluhan' => 'required|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $path = null;
        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('konsultasi_foto', 'public');
        }

        Konsultasi::create([
            'user_id' => Auth::id(),
            'umur' => $request->umur,
            'jenis_kulit' => $request->jenis_kulit,
            'keluhan' => $request->keluhan,
            'foto' => $path,
        ]);

        return redirect()->back()->with('success', 'Konsultasi berhasil dikirim!');
    }
}
