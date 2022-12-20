<?php
    session_start();
    $acc = $_POST['acc'];
    $pass = $_POST['pass'];
    $name = $_POST['name'];
    
    $con = mysqli_connect('localhost','pma','1234');
    if(!$con){
        die('資料庫連接失敗').mysqli_error();
    }
    mysqli_select_db($con,'login');
    $sql = "SELECT * FROM user WHERE account = '".$acc."'";
    $res = mysqli_query($con,$sql);
    if($res->num_rows > 0){
        echo json_encode(array(
            "status" => "1",
            "why" => "帳號重複"
        ));
        
        
    }else{
        $sql = "INSERT INTO user VALUES (NULL, '".$name."', '".$acc."','".$pass."')";
        $res = mysqli_query($con,$sql);
        echo json_encode(array(
            "status" => "2",
            "why" => "註冊成功，幫你跳回登入頁頁面"
        ));
    }