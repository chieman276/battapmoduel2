<?php
//kiểm tra xem đã submit form hay chưa
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    // lấy giá trị luu vào bộ nhớ
   $x = $_REQUEST["x"];
    $y = $_REQUEST["y"];
//xu lý và xuất0
    if ($x != 0 && $y != 0){
        echo $x + $y;
        echo "<br>";
        echo $x - $y;
        echo "<br>";
        echo $x * $y;
        echo "<br>";
        echo $x / $y;
        echo "<br>";
    } else{
        echo "không hợp lệ!!";
    }
 }
?>
<form method="POST">
    nhập x: <input type="text" name="x"><br>
    nhập y: <input tyoe="text" name="y"><br>
    <input type="submit" name="submit" value="tính">
<form>

