<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class KelasController extends Controller
{
    public function show(string $id):View {

        $kelas = Kelas::findOrFail($id);
        return view('kelas.show', compact('kelas'));
    }

    public function index(): View
    {
       $kelas = Kelas::latest()->paginate(10);
       return view('kelas.index',compact('kelas'));
    }

    public function create(): View
    {
        return view('kelas.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nama_kelas' => 'required|min:2|unique:kelas,nama_kelas',
            
        ]);

        Kelas::create([
            'nama_kelas' => $request->nama_kelas,
            
        ]);

        return redirect()->route('kelas.index')->with('success', 'Kelas berhasil ditambahkan!');
    }

    public function edit(string $id): View {
        $kelas = Kelas::findOrFail($id);
        return view('kelas.edit', compact('kelas'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
    $request->validate([
        'nama_kelas'   => 'required|min:2',
    ]);

    $kelas = Kelas::findOrFail($id);
    $kelas->update([
        'nama_kelas'  => $request->nama_kelas
    ]);

    return redirect()->route('kelas.index')->with('success', 'Kelas berhasil diubah!');
    }

    public function destroy($id): RedirectResponse
    {
        $kelas = Kelas::findOrFail($id);
        $kelas->delete();
        return redirect()->route('kelas.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
