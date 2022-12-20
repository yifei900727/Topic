<?php

namespace App\Controllers;

use App\Models\HosMod;
use App\Models\NursingMod;

class HospitalCon extends BaseController
{
    
    public function index()
    {
        echo view('UP/title');
        echo view('pagination/hospital');
        echo view('UP/title_Down');
    }

    public function HosCon()
    {
        $hosmod = new HosMod();
        $sql = "SELECT * FROM hospital ";
        $res = $hosmod->query($sql)->getResult();
        return json_encode($res);
        
    }
    public function NurCon()
    {
        $nurmod = new NursingMod();
        $sql = "SELECT * FROM NursingHome ";
        $res = $nurmod->query($sql)->getResult();
        return json_encode($res);
        
    }

}
