

<?php
//đầu tiên là đang ở phương thức get
//kiểm tra xem đã submit form hay chưa
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //kiểm trả xem đã hiển thị form hay chưa
    // echo "<pre>";
    // print_r($_REQUEST);
    // echo "</pre>";
    //Lấy giá trị lưu vào bộ nhớ
    $money = $_REQUEST['money'];//5
    
    $from = $_REQUEST['from'];//VND to USD

    //kiem tra dieu kien
    //xu ly và xuất
    if ($from ==  'VND to USD'){
        echo $money / 23000;
    }
    if ($from == 'USD to VND'){
        echo $money * 23000;
    }
    

}
?>
<form action="" method="POST">
    Nhập tiền <input type="text" name="money" placeholder="Chuyển đổi tiền"><br>;
    <select name="from">
        <option>VND to USD</option><br>
        <option>USD to VND</option><br>
    </select>
    <input type="submit" name="submit" value="submit">
</form>
