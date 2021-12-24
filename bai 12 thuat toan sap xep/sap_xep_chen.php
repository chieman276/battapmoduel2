<?php
$list = [5, -4, 3, 7, 2, 1, 0, 8, 9, 2];
function insertionSort($list){
for ($i = 1; $i < count($list); $i++) {
    //gán $list[$i] cho biến trung gian temp // $list[$i] = 6
    $temp = $list[$i]; //temp = 6
    //khởi tạo biến $j = $i - 1
    $j = $i - 1; //$j = 1 - 1 = 0
    //trường hợp khi $j >=0 và giá trị $list[$j] > biến trung gian temp
    while ($j >= 0 && $list[$j] > $temp) { //($j>=0 và giá trị 8($list[$j]) > 6($temp))
        //$list[$j + 1] = $list[$j];
        //$list[1]    = 6
        //$list[0]    = $temp(6);
        $list[$j + 1] = $list[$j];
        $j--; // để kiểm tra trường hợp tiếp theo, khi $j = 0(tức ở vị trí index = 0) thì dừng
    }
    //lúc temp mang giá trị 8(lớn hơn giá trị của vị trí bên trái)
    // thực hiện gán giá trị liền kề = temp
    $list[$j + 1] = $temp;
}
return $list;
}


foreach (insertionSort($list) as $key => $value) {
    echo $value . " ";
}