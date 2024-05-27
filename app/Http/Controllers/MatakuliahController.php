<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class MatakuliahController extends Controller
{
    public function show(string $id):View {

        $matakuliah = Matakuliah::findOrFail($id);
        return view('matakuliah.show', compact('matakuliah'));
    }

    public function index(): View
    {
       $matakuliah = Matakuliah::latest()->paginate(10);
       return view('matakuliah.index',compact('matakuliah'));
    }

    public function create(): View
    {
        return view('matakuliah.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nama_matakuliah' => 'required|min:2|unique:matakuliah,nama_matakuliah',
            
        ]);

        Matakuliah::create([
            'nama_matakuliah' => $request->nama_matakuliah,
            
        ]);

        return redirect()->route('matakuliah.index')->with('success', 'Matakuliah berhasil ditambahkan!');
    }

    public function edit(string $id): View {
        $matakuliah = Matakuliah::findOrFail($id);
        return view('matakuliah.edit', compact('matakuliah'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
    $request->validate([
        'nama_matakuliah'   => 'required|min:2',
    ]);

    $matakuliah = Matakuliah::findOrFail($id);
    $matakuliah->update([
        'nama_matakuliah'  => $request->nama_matakuliah
    ]);

    return redirect()->route('matakuliah.index')->with('success', 'Matakuliah berhasil diubah!');
    }

    public function destroy($id): RedirectResponse
    {
        $matakuliah = Matakuliah::findOrFail($id);
        $matakuliah->delete();
        return redirect()->route('matakuliah.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

}
