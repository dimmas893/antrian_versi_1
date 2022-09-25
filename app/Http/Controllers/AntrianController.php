<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AntrianController extends Controller
{
    public function index()
    {
        $data['antri_cs'] = 0;
        $data['antri_teller_1'] = 0;
        $data['antri_teller_2'] = 0;
        $data['antri'] = "-";
        return view('antrian', $data);
    }

    public function antri_cs($antri_cs)
    {

        // $antri_cs = 0;
        $data['antri_cs'] = $antri_cs + 1;
        $data['antri_teller_1'] = 0;
        $data['antri_teller_2'] = 0;
        $data['antri'] = "cs";
        return view('antrian', $data);
    }

    public function antri_teller1($antri_teller_1)
    {
        $antri_teller_1 = 0;
        $data['antri_cs'] = 0;
        $data['antri_teller_1'] = $antri_teller_1 + 1;
        $data['antri_teller_2'] = 0;
        $data['antri'] = "teller1";
        return view('antrian', $data);
    }

    public function antri_teller2($antri_teller_2)
    {
        $data['antri_cs'] = 0;
        $data['antri_teller_1'] = 0;
        $data['antri_teller_2'] = $antri_teller_2 + 1;
        $data['antri'] = "teller2";
        return view('antrian', $data);
    }
}
