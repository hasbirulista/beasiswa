<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;


class RegisterController extends Controller
{
    public function index()
    {
        return view('daftar', [
            'title' => 'Daftar'
        ]);
    }


}
