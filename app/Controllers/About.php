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
        $data_parameter = [
            "metode_komunikasi" => $data1,
            "nomor_id" => $data2
        ];

        return view('about/contact', $data_parameter);
    }
}
