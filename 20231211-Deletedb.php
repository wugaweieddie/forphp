<?php
    header("Access-Control-Allow-Origin: *");
    //接收前端過來的值
    $p_flist = $_POST["flist"];

    

    $servername = "localhost";
    $username = "admin";
    $password = "eddie205";
    $dbname = "waterfood";

    try{
    //建立連線
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    //設定錯誤模式
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql ="DELETE FROM `food` WHERE flist='$p_flist'";
    $conn->exec($sql);
    echo"新增成功!";
    }catch(PDOException $e){
        echo"連線錯誤!".$sql.$e->getMessage();
    }
?>