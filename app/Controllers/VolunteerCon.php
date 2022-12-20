<?php

namespace App\Controllers;

use App\Models\ActivityMod;
use App\Models\VolMod;


class VolunteerCon extends BaseController
{
    public function index()
    {
        echo view('UP/title');
        echo view('pagination/volunteer');
        echo view('UP/title_Down');
    }

    public function act()
    {
        $Act = new ActivityMod();
        $sql = "SELECT * FROM `Activity` ";
        $res = $Act->query($sql)->getResult();
        return json_encode($res);
        
    }

    public function vol(){
        $Act = new VolMod();
        $sql = "SELECT * FROM `Volunteer`";
        $res = $Act->query($sql)->getResult();
        return json_encode($res);
    }
}
