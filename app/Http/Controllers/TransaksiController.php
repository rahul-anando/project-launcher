<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Petugas;
use App\Models\Membership;
use Illuminate\Http\Request;
use DB;

class TransaksiController extends Controller
{
    public function home()
    {
        /* $total = DB::table('transaksis')->count(); */
        $total = Transaksi::count();
        $allpetugas = Petugas::count();
        $members = Membership::count();
        $petugass = Petugas::all();
        $transaksis = Transaksi::all();
        $trans = Transaksi::orderBy('created_at', 'desc')->get();
        return view('main', compact('transaksis', 'trans', 'total', 'petugass', 'members', 'allpetugas'));
    }

    public function index()
    {
        $transaksis = Transaksi::all();
        return view('transaksi.transaction', compact('transaksis'));
       /*  $result = DB::table('transaksis')->get();
        return view('transaksi.transaction', ['transaksis' => $result]); */
    }

    public function create()
    {
        return view('main');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_cost'         => 'required|string|max:255',
            'alamat'            => 'required|string|max:255',
            'petugas_id'        => 'required',
            'selesai'           => 'required|date',
            'jenis_laundry'     => 'required',
            'total_berat'       => 'required|numeric',
            'total_biaya'       => 'required|numeric',
            'status_pembayaran' => 'required',
            'diskon_member'     => 'required'
            ]);

        Transaksi::create($request->all());

       /*  $result = DB::table('transaksis')->insert([
            'nama_cost' => request()->nama_cost,
            'alamat' => request()->alamat,
            'nama_petugas' => request()->nama_petugas,
            'selesai' => request()->selesai,
            'jenis_laundry' => request()->jenis_laundry,
            'total_berat' => request()->total_berat,
            'status_pembayaran' => request()->status_pembayaran,
            'diskon_member' => request()->diskon_member
        ]); */

        return redirect('/home')->with('status', 'Data Transaksi berhasil ditambahkan!');
    }

    public function edit(Transaksi $transaksi)
    {
        $petugass = Petugas::all();
        return view('transaksi.edit_transaction', compact('transaksi', 'petugass'));
    }

    public function update(Transaksi $transaksi)
    {
       /*  $result = DB::table('transaksis')->where('id', $id)->update([
            'nama_cost' => request()->nama_cost,
            'alamat' => request()->alamat,
            'nama_petugas' => request()->nama_petugas,
            'selesai' => request()->selesai,
            'jenis_laundry' => request()->jenis_laundry,
            'total_berat' => request()->total_berat,
            'total_biaya' => request()->total_biaya,
            'status_pembayaran' => request()->status_pembayaran,
            'diskon_member' => request()->diskon_member
        ]); */

        $transaksi->update([
            'nama_cost' => request()->nama_cost,
            'alamat' => request()->alamat,
            'petugas_id' => request()->petugas_id,
            'selesai' => request()->selesai,
            'jenis_laundry' => request()->jenis_laundry,
            'total_berat' => request()->total_berat,
            'total_biaya' => request()->total_biaya,
            'status_pembayaran' => request()->status_pembayaran,
            'member_id' => request()->member_id,
            'diskon_member' => request()->diskon_member,
        ]);

        return redirect('/transaksi')->with('status', 'Data Transaksi berhasil diubah!');

    }

    public function delete(Transaksi $transaksi)
    {

        $transaksi->delete();
        /* $transaksi = Transaksi::findOrFail($id); */
        /* return redirect()->route('transaksi.transaction')->with('success', 'Data Transaksi berhasil dihapus'); */
        /* $result = DB::table('transaksis')->where('id', $id)->delete(); */
        return redirect('transaksi');
    }


}
