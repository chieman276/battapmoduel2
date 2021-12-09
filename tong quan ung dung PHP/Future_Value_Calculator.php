<?php
//kiem tra nguoi da submit form hay chua
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    //kiem tra du lieu da gui len hay chua
    // echo "<pre>";
    // print_r($_REQUEST);
    // echo "</pre>";
    //lay gia tri luu vao
    $amount = $_REQUEST['amount'];
    $rate = $_REQUEST['rate'];
    $year = $_REQUEST['year'];
    //xuly
    		/*
		Giá trị Tương lai = Giá trị Hiện tại + (Giá trị Hiện tại * Lãi suất)
		*/
    $future_value = $amount + ($amount * $rate);
    // xuat 
    echo $future_value;

}
?>
<form action="" method="POST">
    amount: <input type="text" name="amount"><br>
    rate: <input type="text" name="rate"><br>
    year: <input type ="text" name="year"><br>
    <input type="submit" name="submit" value="tinh toan">
</form>