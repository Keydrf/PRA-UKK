<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function petugas(){
        return view('petugas.transaksi');
    }
}
