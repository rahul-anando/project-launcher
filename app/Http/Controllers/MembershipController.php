<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;

class MembershipController extends Controller
{

    public function member()
    {
        $member = Membership::all();
        return view('member.membership', compact('member'));
    }

    public function tambah()
    {
        return view('member.create');
    }

    public function add(Request $request)
    {
        $request->validate([
            'nama_member'       => 'required|string|max:255',
            'alamat'            => 'required|string|max:255',
            'no_telephone'      => 'required|string|max:255',
            'jenis_kelamin'     => 'required',
            'diskon_member'     => 'required',
            'status'            => 'required',
            ]);
            Membership::create($request->all());
            return redirect('/member')->with('status', 'Data Member berhasil ditambahkan!');

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

    public function ubah(Membership $member)
    {

        return view('member.edit', compact('member'));
    }

    public function updated(Membership $member)
    {
        $member->update([
            'nama_member' => request()->nama_member,
            'alamat' => request()->alamat,
            'no_telephone' => request()->no_telephone,
            'jenis_kelamin' => request()->jenis_kelamin,
            'status' => request()->status,
        ]);

        return redirect('/member')->with('status', 'Data Member berhasil diubah!');
    }

    public function hapus($id)
    {
        /*$members = Transaksi::findOrFail($id);
        $members->delete();
        */

        /*    return redirect()->route('user')->with('success', 'Data Member berhasil dihapus'); */
        $result = 'DB'::table('members')->where('id', $id)->delete();
        return redirect('member');
    }
}
