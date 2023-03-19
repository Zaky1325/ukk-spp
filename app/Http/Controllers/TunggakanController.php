<?php

namespace App\Http\Controllers;

use App\Models\Spp;
use App\Models\Siswa;
use App\Models\User;
use App\Models\Kelas;
use App\Models\Tunggakan;
use Illuminate\Http\Request;

class TunggakanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tunggakan = Tunggakan::latest()->paginate(5);
        $siswa = Siswa::latest()->paginate(5);

        return view('admin.tunggakan.index', compact('tunggakan', 'siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $tunggakan = Tunggakan::all();
        $siswa = Siswa::all();
        $user = User::all();
        $kelas = Kelas::all();
        $spp = Spp::all();
        return view('admin.tunggakan.create', compact('siswa','user','kelas','spp'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'siswa_id' => ['required', 'string'],
            'bulan' => ['required', 'string'],
            'id_spp' => ['required', 'string'],
            'total_tunggakan' => ['required', 'string'],
        ]);
        $validatedData['sisa_bulan'] = $request->bulan;
        $validatedData['sisa_tunggakan'] = $request->total_tunggakan;
        Tunggakan::create($validatedData);

        return redirect()->route('tunggakan.index')->with('success', 'Berhasil Menambahkan Data Tunggakan Siswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tunggakan $tunggakan)
    {
        $siswa = Siswa::all();

        return view('tunggakan.edit', compact('siswa', 'tunggakan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tunggakan $tunggakan)
    {
        $validatedData = $request->validate([
            'id_siswa' => ['required', 'string'],
            'bulan' => ['required', 'string'],      
            'id_spp' => ['required', 'string'],
            'total_tunggakan' => ['required', 'string'],
        ]);
        $validatedData['sisa_bulan'] = $request->bulan;
        $validatedData['sisa_tunggakan'] = $request->total_tunggakan;

        $tunggakan->update($validatedData);

        return redirect()->route('tunggakan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tunggakan = Tunggakan::findOrFail($id);
        if ($tunggakan) {
            $tunggakan->delete();

            return redirect()->route('tunggakan.index');
        }
    }
}
