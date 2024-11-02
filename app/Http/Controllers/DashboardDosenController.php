<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Prodi;
use Illuminate\Support\Facades\Gate;
use Barryvdh\DomPDF\Facade\Pdf;

class DashboardDosenController extends Controller
{
    public function index()
    {
        if (! Gate::allows('admin')) {
            abort(403);
        }

        $dosen=Dosen::latest()->paginate(10);
        return view('dashboard.dosen.index',['dosens'=>$dosen]);

    }

    public function cetakPdf()
    {
        $pdf = PDF::loadView('dashboard.dosen.cetak_pdf', ['dosens' => Dosen::all()]);
        return $pdf->stream('Laporan-Data-Dosen.pdf');
    }

    public function destroy(string $id)
    {
        Dosen::destroy($id);
        return redirect('/dashboard-dosen')->with('pesan', 'Data Berhasil dihapus');
    }

    public function show(string $id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('dashboard.dosen.show', compact('dosen'));
    }

    public function edit(string $id)
    {
       $prodis = Prodi::all();
       $dosen = Dosen::find($id);
       return view('dashboard.dosen.edit',compact('prodis','dosen'));
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nik' => 'required',
            'nama' => 'required|min:3',
            'email' => 'required|email',
            'no_telp' => 'required',
            'prodi_id' => 'required|exists:prodis,id',
            'alamat' => 'nullable',
        ]);
        Dosen::where('id', $id)->update($validated);
        return redirect('/dashboard-dosen')->with('pesan', 'Data dosen berhasil diubah');
    }


    public function create()
    {
        $prodis = Prodi::all();
        return view('dashboard.dosen.create',['prodis' => $prodis]);

    }

    public function store(Request $request)
    {
    $validated = $request->validate([
        'nik' => 'required|unique:dosens',
        'nama' => 'required|min:3',
        'email' => 'required|email',
        'no_telp' => 'required',
        'prodi_id' => 'required',
        'alamat' => 'nullable',
    ]);

    Dosen::create($validated);

    return redirect('/dashboard-dosen')->with('pesan', 'Data dosen berhasil disimpan');
    }
}
