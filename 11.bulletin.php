<?php
    error_reporting(0); //不要顯示錯誤的報告
    session_start(); //開啟一個SESSION
    if (!$_SESSION["id"]) { //假如沒有SESSION["id"]
        echo "請先登入"; 網頁顯示 請先登入
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; //在3秒後自動跳回2.login.html
    }
    else{
        echo "歡迎, ".$_SESSION["id"]."[<a href=12.logout.php>登出</a>] [<a href=18.user.php>管理使用者</a>] [<a href=22.bulletin_add_form.php>新增佈告</a>]<br>";
        # 顯示 歡迎 XXSESSION + 登出的超連結點了之後回跳轉到 12.logout.php +管理使用者的超連結點選之後會跳到 18.user.php + 新增佈告的超連結點選之後會跳到 22.bulletin_add_form.php
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); //建立一個資料庫連結之變數$conn
        $result=mysqli_query($conn, "select * from bulletin"); //建立一個查詢資料庫指令 select * from bulletin 之變數$result
        echo "<table border=2><tr><td></td><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";  //顯示一個表格邊框像素為2，顯示表格每格按照順序顯示佈告編號到發佈時間
        while ($row=mysqli_fetch_array($result)){ //建立一個while迴圈直到無法抓取資料後即停止
            echo "<tr><td><a href=26.bulletin_edit_form.php?bid={$row["bid"]}>修改</a>
            <a href=28.bulletin_delete.php?bid={$row["bid"]}>刪除</a></td><td>"; 
            //創建一個 修改、刪除 的超連結 會跳至26.bulletin_edit_form.php?bid={$row["bid"]} 、28.bulletin_delete.php?bid={$row["bid"]}。 {$row["bid"]}會根據點的格子不同而改變
            echo $row["bid"];
            echo "</td><td>";
            echo $row["type"];
            echo "</td><td>"; 
            echo $row["title"];
            echo "</td><td>";
            echo $row["content"]; 
            echo "</td><td>";
            echo $row["time"];
            echo "</td></tr>";
        }
        echo "</table>"; //表格的結尾
    
    }

?>
