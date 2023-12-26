<?php
    header("Access-Control-Allow-Origin: *");
    //接收前端過來的值
    $p_flist = $_POST["flist"];
    $p_ftel = (string)$_POST["ftel"];
    $p_fadd = $_POST["fadd"];
    $p_fcont = $_POST["fcont"];
    $p_fmon = $_POST["fmon"];





    $servername = "localhost";
    $username = "admin";
    $password = "eddie205";
    $dbname = "waterfood";

    try{
    //建立連線
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    //設定錯誤模式
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE food SET ftel='$p_ftel',fadd='$p_fadd',fcont='$p_fcont',fmon='$p_fmon' WHERE flist=$p_flist"; //要加''變字串
    $conn->exec($sql);
    echo"新增成功!";
    }catch(PDOException $e){
        echo"連線錯誤!".$sql.$e->getMessage();
    }
?>