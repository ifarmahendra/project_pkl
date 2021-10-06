<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelCOba;

class rama extends Controller
{

    public function Ipang(){
        $string = ModelCOba::all();
        $siswa = ModelCOba::orderby('id', 'DESC')->first();
        return view('coba',compact ('string', 'siswa'));
    }
}