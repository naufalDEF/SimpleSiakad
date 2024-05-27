<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class UserController extends Controller
{
    public function show(string $id): View
    {
        return view('user.profile', [
            'user' => User::findOrFail($id)
        ]);
    }

    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function create(): View
    {
        return view('user.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|min:5|unique:users,name',
            'email' => 'required|email|min:5|unique:users,email',
            'password' => 'required|min:5',
            'level' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => md5($request->password),
            'level' => $request->level,
        ]);

        return redirect()->route('user.index')->with('success', 'User berhasil ditambahkan!');
    }

    public function edit(string $id): View {
        $users = User::findOrFail($id);
        return view('user.edit', compact('users'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
    $request->validate([
        'name' => 'required|min:5',
        'email' => 'required|email|min:5',
        'password' => 'required|min:5',
        'level' => 'required',
    ]);

    $user = User::findOrFail($id);
    $user->update([
        'name'  => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'level' => $request->level,
    ]);

    return redirect()->route('user.index')->with('success', 'User berhasil diubah!');
    }


    public function destroy($id): RedirectResponse
    {
        $users = User::findOrFail($id);
        $users->delete();
        return redirect()->route('user.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

}
