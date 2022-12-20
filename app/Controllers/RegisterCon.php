<?php

namespace App\Controllers;

use App\Models\RegMod;

class RegisterCon extends BaseController
{
    public function index()
    {
        return view('register');
    }

    public function reg()
    {
        session_start();
        $RegMod = new RegMod();
        $acc = $_POST['acc'];
        $pass = $_POST['pass'];
        $name = $_POST['name'];
        $telephone = $_POST['telephone'];
        $mail = $_POST['mail'];
        
        $sql = "SELECT * FROM user WHERE account = '".$acc."'";
        
        $res = $RegMod->query($sql)->getRow();
       
        if($res!= null){
            return json_encode(array(
                "status" => "1",
                "why" => "帳號重複"
            ));
        }
        else{
            $sql = "INSERT INTO user VALUES (NULL, '".$name."', '".$acc."','".$pass."','".$telephone."','".$mail."')";
            $res = $RegMod->query($sql);
            return json_encode(array(
                "status" => "2",
                "why" => "註冊成功，幫你跳回登入頁頁面"
            ));
        }
    }
}
