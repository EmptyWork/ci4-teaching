<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Page extends BaseController
{
    public function index()
    {
        $users = new \App\Models\Users();

        $list_of_users = $users->findAll();
        
        if (count($list_of_users) < 1) {
            $users->insert([
                "name" => "Glend",
                "address" => "Ambon"
            ]);
            
            $list_of_users = $users->findAll();
        }
        
        return dd($list_of_users);

        // return view("layouts/header")
        //         .view("multiview/index")
        //         .view("layouts/footer");
        // return view("layouting/index");
    }
}
