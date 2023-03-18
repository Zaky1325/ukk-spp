<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spp;

class SPPController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $spp = Spp::all();
        return view('admin.spp.index', compact('spp'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.spp.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tahun' => 'required',
            'nominal' => 'required',
        ]);

        $create = Spp::create([
            'tahun' => $request->get('tahun'),
            'nominal' => $request->get('nominal'),
        ]);

        if($create) {
            return redirect()->route('spp.index');
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
        $spp = Spp::find($id);
        return view('admin.spp.edit', compact('spp'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $spp = Spp::find($id);

        $request->validate([
            'tahun'=>'required',
            'nominal'=>'required',
        ]);
        $update = $spp->update([
            'tahun' => $request->input('tahun'),
            'nominal' => $request->input('nominal'),
        ]);
        if($update) {
            return redirect()->route('admin.spp.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $spp = Spp::findOrFail($id);
        $spp->delete();
        return redirect()->route('spp.index');
    }
}
