<style>
table {
    border-top-color: #ff0000;
    border-top-color: red;
    border-top-color: rgb(255, 0, 0);
    width: 500px;
}

h2 {
    background-attachment: ;
}
</style>
<?php
$customerList = [
    "1" => [
        "name" => "Mai Văn Hoàn",
        "day_of_birth" => "1983/08/20",
        "address" => "Hà Nội",
        "profile" => "images/img1.jpg"],
    "2" => [
        "name" => "Nguyễn Văn Nam",
        "day_of_birth" => "1983/08/21",
        "address" => "Bắc Giang",
        "profile" => "images/img2.jpg"],
    "3" => [
        "name" => "Nguyễn Thái Hòa",
        "day_of_birth" => "1983/08/22",
        "address" => "Nam Định",
        "profile" => "images/img3.jpg"],
    "4" => [
        "name" => "Trần Đăng Khoa",
        "day_of_birth" => "1983/08/17",
        "address" => "Hà Tây",
        "profile" => "images/img4.jpg"],
    "5" => [
        "name" => "Nguyễn Đình Thi",
        "day_of_birth" => "1983/08/19",
        "address" => "Hà Nội",
        "profile" => "images/img5.jpg"]
];
?>


<?php

function searchByDate($customer,$fromDate,$toDate){
    if (empty($fromDate) || empty($toDate)){
        return $customer;
    }
    $filteredCustomers = [];
    foreach ($customer as $customer){
        if (strtotime($customer['day_of_birth']) < strtotime($fromDate))
        continue;
    if (strtotime($customer['day_of_birth']) > strtotime($toDate))
    continue;
    $filteredCustomers[] = $customer;
    }
    return $filteredCustomers;
}
?>
<?php
$fromDate = null;
$toDate = null;
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if ( isset($_REQUEST["from"]) ) {
        $fromDate = $_REQUEST["from"];

    }
    if (isset ($_REQUEST["to"])){
        $toDate = $_REQUEST["to"];

    }


}
$filteredCustomers = searchByDate($customerList, $fromDate, $toDate);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form method="GET">
    Chọn ngày sinh từ: <input id="form" type="date" name="from" placeholder="yyyy/mm/dd" value="" />
    Đến: <input id="to" type="date" name="to" placeholder="yyyy/mm/dd" value="" />
    <input type="submit" id="submit" value="Lọc" />
</form>

<table border="1">
    <caption>
        <h2>Danh sách khách hàng</h2>
    </caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>
    <?php foreach ($filteredCustomers as $index => $customer): ?>
    <tr>
        <td><?php echo $index + 1; ?></td>
        <td><?php echo $customer['name']; ?></td>
        <td><?php echo $customer['day_of_birth']; ?></td>
        <td><?php echo $customer['address']; ?></td>
        <td>
            <div class="profile"><img src="<?php echo $customer['profile']; ?>" /></div>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
