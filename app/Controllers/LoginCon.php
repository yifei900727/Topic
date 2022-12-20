<?php

namespace App\Controllers;

use App\Models\RegMod;

class LoginCon extends BaseController
{
    public function index()
    {

        echo view('login');
    }
    public function log()
    {
        session_start();
        $RegMod = new RegMod();
        $account = $_POST['account'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM user WHERE account='" . $account . "' AND password='" . $password . "'";
        $res = $RegMod->query($sql)->getRow();
        if ($res == null) {
            return json_encode(array(
                "status" => "1",
                "why" => "帳號或密碼錯誤"
            ));
        } else {
            foreach ($res as $row) {
                $_SESSION['account'] = $row->account;
                $_SESSION['password'] = $row->password;
                $_SESSION['name'] = $row->name;
                $_SESSION['u_id'] = $row->u_id;
                $_SESSION['telephone'] = $row->telephone;
                $_SESSION['mail'] = $row->mail;
            }
            // echo $_SESSION;
            return json_encode(array(
                "status" => "2",
                "why" => "登入成功"
            ));
        }

        echo json_encode($res);

        
    }
}
