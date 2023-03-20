<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use PDF;

class HistoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pembayaran = Pembayaran::all();
        return view('histori.index', compact('pembayaran'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function cetak_pdf()
    {
        $pembayaran = Pembayaran::all();
        $pdf = PDF::loadView('histori.cetak_pdf', [
            'pembayaran' => $pembayaran
        ]);
        return $pdf->download('Laporan-Pembayaran.pdf');

        $pdf = App::make('histori.cetak_pdf');
        $pdf->loadHTML('<h1>Test</h1>');
        return $pdf->stream();
        // $pembayaran = Pembayaran::all();
        return view('histori.cetak_pdf', compact('pembayaran'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }
}
