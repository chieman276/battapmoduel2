<style>
    form {
    width: 300px;
    border: 10px solid green;
    padding: 20px;
    margin: 0 auto;
    font-weight: 700px;
}

form input {
    width: 100%;
    padding: 10px 0;
}
</style>
<?php
//kiểm tra người dùng đã submit form hay chua
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //kiểm tra du lieu duoc gửi lên
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
    //lấy giá tri lưu vào bộ nhớ
    $ten = $_POST['ten'];
    $email =$_POST['email'];
    $phone =$_POST['phone'];
    //xử lý
    if( empty($ten) && empty($email) && empty($phone) ){
        echo "lỗi!!";
    } else {
        if ( filter_var($email, FILTER_VALIDATE_EMAIL) ) {
            echo "Cám ơn bạn đã đăng ký!";
        }else{
            echo "vui lòng nhập lại Email";
        }
    }

}
?>
<form method="POST">
    Tên người dùng: <input type="text" name="ten"><br>
    Email: <input type="text" name="email"><br>
    Điện thoại: <input type="text" name="phone">
    <input type="submit" name="submit" value="submit">
<form>