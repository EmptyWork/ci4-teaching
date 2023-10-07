<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function about_index(): string
    {
        return "Ini contoh dari about";
    }

    public function about_contact($data = null, $data2 = null): string
    {
        if (!isset($data) || !isset($data2)) {
            return "Ini contoh dari about";
        }
        return "Ini contoh dari about yang ada parameter: " . $data . " & " . $data2;
    }
}
