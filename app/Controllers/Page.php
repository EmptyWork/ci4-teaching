<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function index()
    {
        $pengguna = new \App\Models\Pengguna();
       
        $para_pengguna = $pengguna->findAll();

        if(count($para_pengguna) < 1){ 
            $pengguna->insert([
                "nama" => "Glend",
                "alamat" => "Ambon",
                "email" => "stevarth@emptywork.my.id",
            ]);
        }

        return dd($para_pengguna);
        // return view('page/index');
        // return view('layouts/header') . view('page/index') . view('layouts/footer');
        //return "ini halaman awal dari website yang sedang saya buat dengan menggunakan framework CodeIgniter4 v4.4.1";
    }
}
