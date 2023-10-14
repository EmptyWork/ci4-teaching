<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class About extends BaseController
{
    public function index()
    {
        return view('about/index');
    }

    public function contact($data1 = null, $data2 = null): string
    {
        $data = [
            "username" => $data1,
            "phone" => $data2
        ];

        // if (!isset($data1) && !isset($data2)) {
        //     return view('about/index');
        // }

        return view('about/contact', $data);
    }
}
