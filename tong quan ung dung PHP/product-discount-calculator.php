<?php
//kiem tra nguoi dung da submit form hay chua
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    //kiem tra du lieu da gui len hay chua
    echo "<pre>";
    print_r($_REQUEST);
    echo "</pre>";
    //la gia tri nguoi nhap, luu vao bo nho
    $description = $_REQUEST['description'];
    $price = $_REQUEST['price'];
    $percent =$_REQUEST['percent'];
    //xu ly
    /*
    Discount Amount = List Price * Discount Percent * 0.1 
    */
    $amount = $price *  $percent * 0.1;
    //
    echo $amount;
}
?>
<form action="" method="POST">
    Product Description:<input type="text" name="description"><br>
    List Price:<input type="text" name="price"><br>
    Discount Percent:<input type="text" name="percent"><br>
    <input type="submit" name="subimt" value="tinh toan">
</form>