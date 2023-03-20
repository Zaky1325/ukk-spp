<?php

namespace App\Http\Controllers;

use App\Models\Spp;
use App\Models\User;
use App\Models\Siswa;
use App\Models\Tunggakan;
use App\Models\Pembayaran;
use Illuminate\Http\Request;

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
        $tunggakan = Tunggakan::all();
        return view('admin.pembayaran.create', compact('siswa', 'user','spp','tunggakan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'id_petugas' => ['required'],
            // 'siswa_id' => ['required'],
            'tunggakan' => ['required'],
            // 'bulan' => ['required'],
            'id_spp' => ['null'],
            'bulan_dibayar' => ['required', 'numeric'],
            'jumlah_bayar' => ['required', 'numeric']
        ];
        // dd($rules);

        if ($request->tunggakan) {
            $tunggakan = Tunggakan::find($request->tunggakan);
            array_push($rules['bulan_dibayar'], 'max:' . $tunggakan->sisa_bulan);
            array_push($rules['jumlah_bayar'], 'max:' . $tunggakan->sisa_tunggakan);
            // dd($tunggakan);
        }


        $validatedData = $request->validate($rules);

        if ($request->tunggakan) {
            $tunggakan = Tunggakan::find($request->tunggakan);
            $tunggakan->sisa_bulan -= $request->bulan_dibayar;
            $tunggakan->sisa_tunggakan -= $request->jumlah_bayar;
            $tunggakan->save();

            $validatedData['total'] = $tunggakan->sisa_tunggakan;
            $validatedData['tunggakan_id'] = $request->tunggakan;
            $validatedData['tgl_bayar'] = date('j F Y');
            unset($validatedData['tunggakan']);

            Pembayaran::create($validatedData);
            return to_route('pembayaran.index')->with('success', 'Berhasil Menambahakan Data Entri Pembayaran');
        }


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
        $pembayaran = Pembayaran::findOrFail($id);
        $pembayaran->delete();
        return redirect()->route('pembayaran.index');
    }
}
