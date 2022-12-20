<?php

namespace App\Controllers;
use App\models\Coordinate1mod;
use App\models\Coordinate2mod;
use App\Models\FuneralMod;

class EndofCon extends BaseController
{
    public function index()
    {
        echo view('UP/title');
        echo view('pagination/Endof');
        echo view('UP/title_Down');
    }

    public function Fs()
    {
        $Act = new FuneralMod();
        $sql = "SELECT * FROM FuneralSociety ";
        $res = $Act->query($sql)->getResult();
        return json_encode($res);
    }
    public function coordinate1(){
        $Act = new Coordinate1mod();
        $sql = "SELECT * FROM coordinate1 ";
        $res = $Act->query($sql)->getResult();
        return json_encode($res);
    }
    public function coordinate2(){
        $Act2 = new Coordinate2mod();
        $sql2 = "SELECT * FROM coordinate2 ";
        $res2 = $Act2->query($sql2)->getResult();
        return json_encode($res2);
    }
}
