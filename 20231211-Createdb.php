<?php
    header("Access-Control-Allow-Origin: *");
    //接收前端過來的值
    $p_pname = $_POST["flist"];
    $p_price = $_POST["ftel"];
    $p_pnum = $_POST["fcont"];
    $p_premark = $_POST["fmon"];



    $servername = "localhost";
    $username = "admin";
    $password = "eddie205";
    $dbname = "waterfood";

    try{
    //建立連線
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    //設定錯誤模式
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql ="INSERT INTO food(flist,ftel,fcont,fmon) VALUES('$p_pname','$p_price','$p_pnum','$p_premark')";
    $conn->exec($sql);
    echo"新增成功!";
    }catch(PDOException $e){
        echo"連線錯誤!".$sql.$e->getMessage();
    }
?>