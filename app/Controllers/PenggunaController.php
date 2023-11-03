<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PenggunaController extends BaseController
{
    public function index()
    {
        return view("auth/registration");
    }

    public function create()
    {
        if (
            !$this->validate(
                [
                    "nama" => "required",
                    "email" => "required",
                    "alamat" => "required"
                ]
            )
        ) {
            $validation = \Config\Services::validation();
            return redirect()->to('/users/new')->withInput()->with('validation', $validation);
        }

        $pengguna = new \App\Models\Pengguna();
        $request = $this->request;

        $pengguna->insert([
            'nama' => $request->getVar('nama'),
            'email' => $request->getVar('email'),
            'alamat' => $request->getVar('alamat'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
        return redirect()->to('/users/new');
    }

    public function list()
    {
        $pengguna = new \App\Models\Pengguna();
        $semua_pengguna = $pengguna->findAll();

        $data = [
            "semua_pengguna" => $semua_pengguna
        ];

        return view("users/index", $data);
    }

    public function delete($pengenal)
    {
        $pengguna = new \App\Models\Pengguna();

        $pengguna->delete($pengenal);

        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/users/');
    }
}
