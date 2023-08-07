<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
class HasilController extends Controller
{
    
    public function index()
    {
        $mahasiswa = Mahasiswa::latest();

        if(request('search')){
            $mahasiswa->where('no_hp', 'like', '%' . request('search') . '%')
                       ->orWhere('name', 'like', '%'. request('search'). '%')
                       ->orWhere('email', 'like', '%'. request('search'). '%');
        }

        return view('hasil', [
            'title' => 'Hasil',
            'mahasiswas' => $mahasiswa->get()
        ]);
    }
}
