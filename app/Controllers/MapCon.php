<?php

namespace App\Controllers;
use App\models\coordinate_1Mod;
use App\models\coordinate_2Mod;
use App\Controllers\BaseController;

class MapCon extends BaseController
{
    public function coordinate1(){
        $Act = new coordinate_1Mod();
        $sql = "SELECT * FROM coordinate1 ";
        $res = $Act->query($sql)->getResult();
        return json_encode($res);
    }
    public function coordinate2(){
        $Act = new coordinate_2Mod();
        $sql = "SELECT * FROM coordinate2 ";
        $res = $Act->query($sql)->getResult();
        return json_encode($res);
    }
}
