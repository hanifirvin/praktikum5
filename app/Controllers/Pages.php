<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];

        return view('pages/home', $data);
    }

    public function device()
    {
        $data = [
            'title' => 'Device'
        ];

        return view('pages/device', $data);
    }
}
