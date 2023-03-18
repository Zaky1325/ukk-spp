<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\Siswa;
use App\Models\User;
use App\Models\Spp;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pembayaran =  Pembayaran::all();
        return view('admin.pembayaran.index', compact('pembayaran'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $siswa = Siswa::all();
        $user = User::all();
        $spp = Spp::all();
        return view('admin.pembayaran.create', compact('siswa', 'user', 'spp'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'id_petugas' => 'required',
        //     'nisn' => 'required',
        //     'tgl_bayar' => 'required',
        //     'bulan_dibayar' => 'required',
        //     'tahun_dibayar' => 'required',
        //     'id_spp' => 'required',
        //     'jumlah_bayar' => 'required',
        // ]);

        Pembayaran::create($request->all());

            return to_route('pembayaran.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pemabayaran = Pembayaran::findOrFail($id);
        $pembayaran->delete();
        return redirect()->route('pembayaran.index');
    }
}
