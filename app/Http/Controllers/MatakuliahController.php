<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (! Gate::allows('admin')) {
            abort(403);
        }

        $matakuliah=Matakuliah::latest()->paginate(10);
        return view('dashboard.matakuliah.index',['matakuliahs'=>$matakuliah]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $matakuliahs = Matakuliah::all();
        return view('dashboard.matakuliah.create', ['matakuliahs'=>$matakuliahs]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode_mk' => 'required|unique:matakuliahs',
            'nama_mk' => 'required|min:3',
            'sks' => 'required',
            'semester' => 'required',
        ]);

        Matakuliah::create($validated);

        return redirect('/dashboard-matakuliah')->with('pesan', 'Data mata kuliah berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $matakuliah = Matakuliah::findOrFail($id);
        return view('dashboard.matakuliah.show', compact('matakuliah'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $prodis = Prodi::all();
       $matakuliah = Matakuliah::find($id);
       return view('dashboard.matakuliah.edit',compact('matakuliah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'kode_mk' => 'required',
            'nama_mk' => 'required|min:3',
            'sks' => 'required',
            'semester' => 'required',
        ]);
        Matakuliah::where('id', $id)->update($validated);
        return redirect('/dashboard-matakuliah')->with('pesan', 'Data mata kuliah berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Matakuliah::destroy($id);
        return redirect('/dashboard-matakuliah')->with('pesan', 'Data Berhasil dihapus');
    }
}
