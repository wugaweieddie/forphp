<?php
    $servername="localhost";
    $username= "admin";
    $password= "eddie205";

    try{
        //建立連線                  主機名稱           資料庫名稱      帳號      密碼                
        $conn = new PDO("mysql:host=$servername;dbname=waterfood",$username,$password);
        //發現錯誤會回傳錯誤的地方  寫了才可以發現哪裡錯誤
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "連線成功";
    }catch(PDOException $e){
        echo "連線錯誤".$e->getMessage();
    }
?>


