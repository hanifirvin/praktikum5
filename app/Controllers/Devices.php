<?php

namespace App\Controllers;

use App\Models\DeviceModel;

class Devices extends BaseController
{
    protected $deviceModel;

    public function __construct()
    {
        $this->deviceModel = new DeviceModel();
    }
    public function index()
    {
        $device = $this->deviceModel->findAll();

        $data = [
            'title' => 'device',
            'device' => $device
        ];

        echo view('Device/index', $data);
    }

}
