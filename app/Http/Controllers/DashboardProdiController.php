<?php

namespace App\Http\Controllers;

use App\Models\DashboardProdi;
use Illuminate\Http\Request;
use App\Models\Prodi;
use Barryvdh\DomPDF\Facade\Pdf;

class DashboardProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prodis=DashboardProdi::latest()->paginate(10);
        return view('dashboard.prodi.index',['prodis'=>$prodis]);
    }

    public function cetakPdf()
    {
        $pdf = PDF::loadView('dashboard.prodi.cetak_pdf', ['prodis' => Prodi::all()]);
        return $pdf->stream('Laporan-Data-Prodi.pdf');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prodis = Prodi::all();
        return view('dashboard.prodi.create', ['prodis'=>$prodis]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request-> validate([
            'nama' => 'required|min:3',
        ]);

        // dd($validated);
        Prodi::create($validated);
        return redirect('/dashboard-prodi');

        // dd($validated);
        DashboardProdi::create($validated);
        return redirect('/dashboard-prodi');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $prodi = Prodi::findOrFail($id);
        return view('dashboard.prodi.show', compact('prodi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // $prodis = Prodi::all();
        // return view('dashboard.prodi.edit', compact('prodis'));

        $prodi = Prodi::findOrFail($id); // Ambil satu instance model berdasarkan id
        return view('dashboard.prodi.edit', compact('prodi'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama' => 'required|min:3',
        ]);
        // $prodi = Prodi::findOrFail($id);
        // $prodi->update($request->all());

        Prodi::where('id', $id)->update($validated);
        return redirect('dashboard-prodi')->with('pesan', 'Data berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Prodi::destroy($id);
        return redirect('dashboard-prodi')->with('pesan','Data berhasil dihapus');
    }
}
