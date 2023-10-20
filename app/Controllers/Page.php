<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Page extends BaseController
{
    public function index()
    {
        return view("layouts/header")
                .view("multiview/index")
                .view("layouts/footer");
    }
}
