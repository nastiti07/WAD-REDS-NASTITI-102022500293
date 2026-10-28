<?php

namespace App\Http\Controllers;

use App\Models\Speaker;
use Illuminate\Http\Request;

class SpeakerController extends Controller
{
    // Read: Menampilkan seluruh daftar pembicara
    public function index()
    {
        $speakers = Speaker::all();
        return view('speakers.index', compact('speakers'));
    }

    // Create: Menampilkan form tambah data
    public function create()
    {
        return view('speakers.create');
    }

    // Create (Store): Menyimpan data baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'expertise' => 'required',
            'institution' => 'required',
        ]);

        Speaker::create($request->all());

        return redirect()->route('speakers.index')->with('success', 'Pembicara berhasil ditambahkan!');
    }

    // Read (Detail): Menampilkan detail profil pembicara
    public function show($id)
    {
        $speaker = Speaker::findOrFail($id);
        return view('speakers.detail', compact('speaker'));
    }

    // Update: Menampilkan form edit data
    public function edit(Speaker $speaker)
    {
        return view('speakers.edit', compact('speaker'));
    }

    // Update (Save): Memperbarui data di database
    public function update(Request $request, Speaker $speaker)
    {
        $request->validate([
            'name' => 'required',
            'expertise' => 'required',
            'institution' => 'required',
        ]);

        $speaker->update($request->all());

        return redirect()->route('speakers.index')->with('success', 'Pembicara berhasil diperbarui!');
    }

    // Delete: Menghapus data dari database
    public function destroy(Speaker $speaker)
    {
        $speaker->delete();

        return redirect()->route('speakers.index')->with('success', 'Pembicara berhasil dihapus!');
    }
}