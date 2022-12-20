<?php

namespace App\Controllers;

// use app\Models\CheckMod;

session_start();
class ActivityCon extends BaseController
{
    public function index()
    {
        echo view('UP/title');
        echo view('pagination/Activity');
        echo view('UP/title_Down');
    }

}
