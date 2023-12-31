<?php
   
    $servername = "localhost";
    $username = "admin";
    $password = "eddie205";
    $dbname = "waterfood";

    try{
        //建立連線
        $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
        //設定錯誤顯示模式
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //設定mysql指令
        $stmt = $conn->prepare("SELECT adminID,adminmimi FROM admin");
        //執行mysql指令
        $stmt->execute();
        //設定讀取出來的資料轉成陣列
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $mydata=[]; //儲存所有撈出來的資料
        foreach($stmt->fetchAll() as $key=>$v){
            // echo $v; (不能直接印陣列)
            // echo implode("/",$v);  //implode將陣列轉成字串顯示
            $mydata[] = $v; //在mydata後面在加一個陣列 形成二維陣列  否則資料會一直被覆蓋 不會疊加
        }
        echo json_encode($mydata); //將陣列轉成json檔 json_encode($mydata);  方便前端應用
    }catch(PDOException $e){
        echo "連線錯誤". $e->getMessage();
    }
?>

