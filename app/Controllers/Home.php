<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data =
        [
            'page' => "",
        ];
        return view('index', $data);
    }
}
