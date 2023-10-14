<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function index(): string
    {
        return view('page/index');
        // return view('layouts/header') . view('page/index') . view('layouts/footer');
        //return "ini halaman awal dari website yang sedang saya buat dengan menggunakan framework CodeIgniter4 v4.4.1";
    }
}
