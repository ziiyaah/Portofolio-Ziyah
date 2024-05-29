<?php

namespace App\Controllers;
use App\Models\sertifikasiModel;

class Home extends BaseController
{
    public function index()
    {
        $sertifikasi=new sertifikasiModel();
        $sertif=$sertifikasi-> sertifikasi();

        $data=[
            'sertifikasi' => $sertif
        ];
        return view('home', $data);
    }

}
