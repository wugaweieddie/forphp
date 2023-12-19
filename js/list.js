// var user = { "listname": "20231204", "tel": "098888111" };
// let listname = localStorage.getItem("list");
// console.log(typeof listname,listname);
// let tels = localStorage.getItem("tel");


// var isAgree;
$(function () {

    // $("#sw1").change(function () {
    //     console.log($(this).val());
    //     if ($(this).is(':checked')) {
    //         console.log("同意");
    //         $(this).next().text("已確認資料");
    //         isAgree = true;
    //     }
    //     else {
    //         console.log("不同意");
    //         $(this).next().text("未確認資料");
    //         isAgree = false;
    //     }
    // });

    // $("#OK_btn").bind("click", function () {
    //     if (isAgree == true) {
    //         var listnames = $("#listname").val(); //輸入的
    //         var tel = $("#tel").val();
    //         // console.log(typeof Number(user["listname"]));
    //         if (listnames == listname) {
    //             if (tel == tels) {
    //             //    window.location.href="../login.html";
    //                window.location.replace("../login.html");
    //             } else {
    //                 alert("電話號碼錯誤");
    //             }
    //         } else {
    //             alert("訂單編號錯誤");
    //         }
    //     }else{
    //         alert("檢查訂單資料");
    //     }


    // });


    //管理者登入
    // $.ajax({
    //     type:"GET",
    //     url:"./20231211-Readdb2.php",
    //     dataType:"json",
    //     success :showdata2,
    //     error:function(){
    //         alert("錯誤");
    //     }
    // });

});

function showdata2(data){
    // console.log(data);
}
