<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.index', [
            'title' => 'Dashboard',
            'mahasiswas' => Mahasiswa::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('daftar', [
            'title' => 'Daftar'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:mahasiswas',
            'no_hp' => 'required|unique:mahasiswas',
            'semester' => 'required',
            'ipk' => 'required',
            'pilihan' => 'required',
            'file' => 'required'
        ]);

        Mahasiswa::create($validatedData);
        #$request->session()->flash('success', 'Pendaftaran Sukses!');
        return redirect('/')->with('success', 'Berhasil Mendaftar!! Tunggu Hasilnya!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('dashboard.show',compact(['mahasiswa']));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('dashboard.edit',compact(['mahasiswa']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id ,Request $request)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update($request->except(['_token','submit']));

        return redirect('/dashboard')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect('/dashboard')->with('success', 'Data telah dihapus!');
    }
}
