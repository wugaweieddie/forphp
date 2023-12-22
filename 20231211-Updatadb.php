<?php
    header("Access-Control-Allow-Origin: *");
    //接收前端過來的值
    $p_flist = $_POST["flist"];
    $p_ftel = (string)$_POST["ftel"];


    $servername = "localhost";
    $username = "admin";
    $password = "eddie205";
    $dbname = "waterfood";

    try{
    //建立連線
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    //設定錯誤模式
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE food SET ftel='$p_ftel' WHERE flist=$p_flist"; //要加''變字串
    $conn->exec($sql);
    echo"新增成功!";
    }catch(PDOException $e){
        echo"連線錯誤!".$sql.$e->getMessage();
    }
?>