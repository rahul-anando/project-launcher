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
        $petugas = Petugas::all();
        return view('petugas.petugas', compact('petugas'));
    }

    public function baru()
    {
        return view('petugas.create');
    }

    public function storea(Request $request)
    {
    //    dd($request->all());

       $request->validate([
        'nama_petugas'         => 'required|string|max:255',
        'username'             => 'required|max:255',
        'password'             => 'required|max:255',
        'no_telepon'           => 'required|max:12',
        'foto'                 => 'image|mimes:jpeg,jpg,png|max:1024',
        'status'               => 'required',
        ]);
        $data = Petugas::create($request->all());

        if($request->hasfile('foto')) {
            $request->file('foto')->move('foto/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect('/petugas')->with('status', 'Data Petugas berhasil ditambahkan!');

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

    public function edits(Petugas $petugas)
    {

        return view('petugas.edit', compact('petugas'));
    }

    public function updates(Petugas $petugas)
    {
        $petugas->update([
            'nama_petugas' => request()->nama_petugas,
            'username' => request()->username,
            'password' => request()->password,
            'no_telepon' => request()->no_telepon,
            'foto' => request()->foto,
            'status' => request()->status,
        ]);

        return redirect('/petugas')->with('status', 'Data Petugas berhasil diubah!');
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
