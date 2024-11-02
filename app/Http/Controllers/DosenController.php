<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use App\Models\Dosen;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;


class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $dosens=Dosen::latest()->paginate(10);
        return view('akademik.dosen',['dosens'=>$dosens]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prodis = Prodi::all();
        return view('dashboard.dosen.create',['prodis' => $prodis]);
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
    public function show(Dosen $dosen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dosen $dosen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dosen $dosen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dosen $dosen)
    {
        //
    }
}
