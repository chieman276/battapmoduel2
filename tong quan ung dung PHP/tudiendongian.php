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
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }
        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
        </style>
</head>
<body>
 
<h2> Từ Điển Anh - Việt </h2>
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
        "captain" => "Lê Biên Thùy"
        ];
        ?>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $searchWord = $_POST["search"];
            $flag =0;
            foreach ($dictionary as $word => $description) {
                if ($word == $searchWord) {
                    echo "từ:" . $word . ". <br/> Nghĩa của từ:" . $description;
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