<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class PagesController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function datacovid()
    {
        return view('data-covid');
    }

    public function penggalangan()
    {
        return view('penggalangan-bantuan');
    }

    public function permohonan()
    {
        return view('permohonan-bantuan');
    }

    public function kontak()
    {
        return view('kontak');
    }

}