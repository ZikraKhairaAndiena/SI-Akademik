<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DashboardMahasiswa;
use App\Models\Mahasiswa;
use App\Models\Prodi;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Barryvdh\DomPDF\Facade\Pdf;

class DashboardMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $mahasiswa=Mahasiswa::latest()->paginate(10);
        // return view('akademik.mahasiswa',['mahasiswas'=>$mahasiswa]);

        $mahasiswas=DashboardMahasiswa::latest()->paginate(10);
        return view('dashboard.mahasiswa.index',['mahasiswas'=>$mahasiswas]);
    }

    public function cetakPdf()
    {
        $pdf = PDF::loadView('dashboard.mahasiswa.cetak_pdf', ['mahasiswas' => Mahasiswa::all()]);
        return $pdf->stream('Laporan-Data-Mahasiswa.pdf');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prodis = Prodi::all();
        return view('dashboard.mahasiswa.create', ['prodis'=>$prodis]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request-> validate([
            'nim' => 'required|unique:mahasiswas',
            'nama_lengkap' => 'required|min:3',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'email' => 'required',
            'prodi_id' => 'required',
            'alamat' => 'nullable',
        ]);

        // dd($validated);
        DashboardMahasiswa::create($validated);
        return redirect('/dashboard-mahasiswa');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('dashboard.mahasiswa.show', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $prodis = Prodi::all();
        $mahasiswa = Mahasiswa::find($id);
        return view('dashboard.mahasiswa.edit', compact('prodis','mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request-> validate([
            'nim' => 'required',
            'nama_lengkap' => 'required|min:3',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'email' => 'required',
            'prodi_id' => 'required',
            'alamat' => 'nullable',
        ]);
        Mahasiswa::where('id', $id)->update($validated);
        return redirect('dashboard-mahasiswa')->with('pesan', 'Data Berhasil di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Mahasiswa::destroy($id);
        return redirect('dashboard-mahasiswa')->with('pesan','Data berhasil dihapus');
    }
}
