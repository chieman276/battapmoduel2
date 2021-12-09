<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input[type=text] {
            width: 300px;
            font-size: 16px;
            border: 100px solid #000000;
            border-radius: 5px;
            padding: 29px 20px 52px 40px;
        }
        #submit {
            border-radius: 10px;
            padding: 10px 32px;
            font-size: 16px;
        }
        </style>
</head>
<body>
 
<h1> <u>Từ Điển Anh - Việt</u> </h1>
<form method="post"> 
<?php
$dictionary = [
        "hello" => "xin chào",
        "how" => "thế nào",
        "book" => "quyển vở",
        "computer" => "máy tính",
        "an" => "Mai Chiếm An",
        "tuan" => "Võ Văn Tuấn",
        "ka" => "Đặng Thùy Ngân",
        "captain" => "Lê Biên Thùy",
        "địa chỉ" => "133 - Lý Thường Kiệt",
        "trung tâm" => "Code Gym Quảng Trị",
        "lớp" => "C1021I1",
        "rep" => "màu đỏ",
        "blue" => "màu xanh",
        "yellow" => "màu vàng",
        "green" => "xanh lá"
        ];
        ?>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $searchWord = $_POST["search"];
            $flag =0;
            foreach ($dictionary as $word => $description) {
                if ($word == $searchWord) {
                    echo "từ muốn tìm :   " . $word . ". <br/> kết quả: " . $description;
                    echo "<br/>";
                    $flag =1;
                }
            }
            if ($flag == 0) {
                echo "không tìm thấy từ cần tra.";
            }
        }
        
        ?>
    <input type="text" name="search" placeholder="Nhập từ cần tìm" />
    <input type="submit" id="submit" value="tìm" />
</form>  
    
</body>
</html>