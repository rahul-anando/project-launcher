<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;

class PetugasController extends Controller
{

    public function petugas()
    {
        $petugass = Petugas::all();
        return view('petugas.petugas', compact('petugass'));
    }

    public function baru()
    {
        return view('petugas.create');
    }

    public function storea(Request $request)
    {
        $request->validate([
            'nama_petugas'         => 'required|string|max:255',
            'username'            => 'required|max:255',
            'password'            => 'required|max:255',
            'no_telepon'      => 'required',
            'status' => 'required',
            ]);
            Petugas::create($request->all());
            return redirect('/petugas')->with('status', 'Data Member berhasil ditambahkan!');

        /*  $result = DB::table('members')->insert([
            'nama_member' => request()->nama_member,
            'alamat' => request()->alamat,
            'no_telephone' => request()->no_telephone,
            'jenis_kelamin' => request()->jenis_kelamin,
            'status' => request()->status,
        ]);

        return redirect('/user')->with('status', 'Data Member berhasil ditambahkan!');
        */
    }

    public function edits(Petugas $petugass)
    {

        return view('petugas.edit', compact('petugass'));
    }

    public function updates(Petugas $petugass)
    {
        $petugass->update([
            'nama_member' => request()->nama_member,
            'alamat' => request()->alamat,
            'no_telephone' => request()->no_telephone,
            'jenis_kelamin' => request()->jenis_kelamin,
            'status' => request()->status,
        ]);

        return redirect('/petugas')->with('status', 'Data Member berhasil diubah!');
    }

    public function apus($id)
    {
        /*$members = Transaksi::findOrFail($id);
        $members->delete();
        */

        /*    return redirect()->route('user')->with('success', 'Data Member berhasil dihapus'); */
        $result = 'DB'::table('petugass')->where('id', $id)->delete();
        return redirect('petugas');
    }
}
