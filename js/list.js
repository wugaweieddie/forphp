// var user = { "listname": "20231204", "tel": "098888111" };
// let listname = localStorage.getItem("list");
// console.log(typeof listname,listname);
// let tels = localStorage.getItem("tel");


// var isAgree;
$(function () {

    // 一般登入
    $.ajax({
        type: "GET",
        url: "./20231211-Readdb.php",
        dataType: "json",
        success: showdata1,
        error: function () {
            alert("一般登入錯誤");
        }
    });




    $("#sw1").change(function () {
        // console.log($(this).val());
        if ($(this).is(':checked')) {
            // console.log("同意");
            $(this).next().text("已確認資料");
            isAgree = true;
        }
        else {
            console.log("不同意");
            $(this).next().text("未確認資料");
            isAgree = false;
        }
    });

    let isAgree = false;
    $("#OK_btn").bind("click", function () {
    //     //店家模式
    //     if ($("#listname").val() == admin) {
    //         if ($("#tel").val() == adminmimi) {
    //             window.location.replace("./login.html");
    //         }
    //     } else {
    //         alert("資料錯誤");
    //     }

        //一般訂購者
        if (isAgree == true) {
            var listnames = $("#listname").val(); //輸入的
            var tel = $("#tel").val();
            // console.log(buylist.indexOf(listnames));   
            if(buylist.indexOf(listnames) !=-1 ||$("#listname").val() == admin){
                if(buytel.indexOf(tel) !=-1 ||$("#tel").val() == adminmimi){
                    if($("#listname").val() == admin){
                        location.href ="./login.html";
                    }else{
                        // console.log($("#listname").val());
                        location.href ="./visitor.html?value="+$("#listname").val()+"";
                    }
                }else{
                    alert("密碼錯誤!");
                }
            }else{
                alert("查無訂單");
            }
        } else {
            alert("檢查訂單資料");
        }


    });


    // 管理者登入
    $.ajax({
        type: "GET",
        url: "./20231211-Readdb2.php",
        dataType: "json",
        success: showdata2,
        error: function () {
            alert("錯誤");
        }
    });
});


//一般消費者訂單
let buylist = [];//訂單編號
let buytel  = [];//訂單電話
function showdata1(data){
    // console.log(data);
    data.forEach(function(item){
        // console.log(item.flist);
        // console.log(item.ftel);
        buylist.push(item.flist);
        buytel.push(item.ftel);
    });
}
// console.log(buylist);
// console.log(buytel);










//商家帳密
let admin;
let adminmimi;
function showdata2(data) {
    // console.log(data[0].adminmimi);
    admin = data[0].adminID;
    adminmimi = data[0].adminmimi;

}
