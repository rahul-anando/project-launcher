<?php

namespace App\Http\Controllers;

use App\Models\TransaksiModel;
use Illuminate\Http\Request;
use DB;

class TransaksiControllers extends Controller
{

    public function index()
    {
        /* $transaksis = Transaksi::all();
        return view('transaksi.transaction', compact('transaksis')); */
        $result = DB::table('transaksis')->get();
        return view('transaksi.transaction', ['transaksis' => $result]);
    }

    public function create()
    {
        return view('main');
    }

    public function store()
    {
        /* $request->validate([
            'nama_cost'         => 'required|string|max:255',
            'alamat'            => 'required|string|max:255',
            'nama_petugas'      => 'required|string|max:255',
            'selesai'           => 'required|date',
            'jenis_laundry'     => 'required',
            'total_berat'       => 'required|numeric',
            'status_pembayaran' => 'required',
            'diskon_member'     => 'required'
            ]);

        Transaksi::create($request->all()); */

        $result = DB::table('transaksis')->insert([
            'nama_cost' => request()->nama_cost,
            'alamat' => request()->alamat,
            'nama_petugas' => request()->nama_petugas,
            'selesai' => request()->selesai,
            'jenis_laundry' => request()->jenis_laundry,
            'total_berat' => request()->total_berat,
            'status_pembayaran' => request()->status_pembayaran,
            'diskon_member' => request()->diskon_member
        ]);

        return redirect('/main')->with('status', 'Data Transaksi berhasil ditambahkan!');
    }

    public function edit($id)
    {
        return view('transaksi.edit_transaction', compact('transaksi'));
    }

    public function update(Request $request, $id)
    {

    /* return redirect()->route('transaksi.index')->with('success', 'Data Transaksi berhasil diubah'); */

    }

    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();

        return redirect()->route('transaksi.index')->with('success', 'Data Transaksi berhasil dihapus');
    }


}
