<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sponsor;
use Illuminate\Support\Facades\Storage;

class SponsorController extends Controller
{

    public function index()
    {
        $sponsors = Sponsor::latest()->get();
return view('admin.l-sponsor', compact('sponsors')); 
    }

    public function create()
    {
        return view('sponsor');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'instansi' => 'required|string|max:255',
            'no_hp' => 'required|string|max:20',
            'nama_event' => 'required|string|max:255',
            'proposal' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);

        $path = $request->file('proposal')->store('proposals', 'public');

        Sponsor::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'instansi' => $request->instansi,
            'no_hp' => $request->no_hp,
            'nama_event' => $request->nama_event,
            'proposal' => $path,
        ]);

        return redirect()->back()->with('success', 'Proposal sponsor berhasil dikirim!');
    }
}
