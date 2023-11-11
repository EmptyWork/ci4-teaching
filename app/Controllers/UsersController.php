<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UsersController extends BaseController
{
    public function index()
    {
        return view('users/index');
    }

    public function create()
    {
        $validation_result = $this->validate([
            "name" => "required",
            "address" => "required",
            // "email" => "required"
        ]);

        if (!$validation_result) {
            return redirect()->to("users")->withInput();
        }

        $users = new \App\Models\Users();
        $request = $this->request;

        $users->insert([
            "name" => $request->getVar('name'),
            "address" => $request->getVar('address')
        ]);

        return redirect()->to('/');

        // dd($validation_result);

        // return "anda menambahkan user baru";
    }
}
