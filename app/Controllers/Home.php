<?php

namespace App\Controllers;

use app\Models\CheckMod;

session_start();
class Home extends BaseController
{
    public function index()
    {
        echo view('UP/title');
        echo view('index');
        echo view('UP/title_Down');
    }


}
