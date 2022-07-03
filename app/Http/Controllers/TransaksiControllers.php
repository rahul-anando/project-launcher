<?php

namespace App\Http\Controllers;

use App\Models\TransaksiModel;
use Illuminate\Http\Request;

class TransaksiControllers extends Controller
{

    public function index()
    {
        $transaksis = Transaksi::all();
        return view('main', compact('transaksis'));
    }

    public function create()
    {
        return view('transaksi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_cost'         => 'required|string|max:255',
            'alamat'            => 'required|string|max:255',
            'nama_petugas'      => 'required|string|max:255',
            'selesai'           => 'required|date',
            'jenis_laundry'     => 'required',
            'total_berat'       => 'required|numeric',
            'status_pembayaran' => 'required',
            'diskon_member'     => 'required'
            ]);

        Transaksi::create($request->all());

        /*  return redirect('/')->with('status', 'Data Transaksi berhasil ditambahkan!');
        */
    }

    public function edit($id)
    {
        return view('transaksi.edit', compact('transaksi'));
    }

    public function update(Request $request, $id)
    {

    /* return redirect()->route('transaksi.index')->with('success', 'Data Transaksi berhasil diubah'); */

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();

        return redirect()->route('transaksi.index')->with('success', 'Data Transaksi berhasil dihapus');
    }


}
