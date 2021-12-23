<?php
//khai báo lớp
class Dancer{
    //khai báo thuộc tính 
    public $name;
    public $gender;
    //
    public function __construct($name, $gender)
    {
        $this->name = $name;
        $this->gender = $gender;
    }
}
// khởi tạo hàng chờ nam
$queueNam = new SplQueue();
//thiết lập hàng chờ nam
$queueNam->enqueue(new Dancer('Tuấn', 'Nam'));
$queueNam->enqueue(new Dancer('An', 'Nam'));
$queueNam->enqueue(new Dancer('A Tâm', 'Nam'));
$queueNam->enqueue(new Dancer('Thỳ', 'Nam'));
//khởi tạo hàng chờ nữ
$queueNu = new SplQueue();
//thiết lập hàng chờ nữ
$queueNu->enqueue(new Dancer('Ka', 'Nữ'));
$queueNu->enqueue(new Dancer('Ngọc Anh', 'Nữ'));
$queueNu->enqueue(new Dancer('Nhi', 'Nữ'));
$pairs = [];        //arraylist
$nam_waiting = [];  //hàng chờ còn lại
$nu_waiting = [];   //hàng chờ còn lại
while (!$queueNu->isEmpty() || !$queueNam->isEmpty()){//
    if(!$queueNu->isEmpty() && !$queueNam->isEmpty()){
        $pairs[] = $queueNam->dequeue()->name .' và '.$queueNu->dequeue()->name;
        //isEmpty -> kiểm tra xem có dữ liệu hay không nếu không có dữ liệu thì trả về true
        // nếu có dữ liệu thì trả về false
    }elseif($queueNu->isEmpty() && !$queueNam->isEmpty()){
        $nam_waiting[] = $queueNam->dequeue()->name;
    }elseif(!$queueNu->isEmpty() && $queueNam->isEmpty()){
        $nu_waiting[] = $queueNu->dequeue()->name;
    }
}
foreach ($pairs as $key => $value){
    echo "Cặp nhảy $value <br>";
}
echo 'Còn ' . count($nam_waiting) . ' dancer nam đang ở trong hàng chờ <br>';
echo 'Còn ' . count($nu_waiting) . ' dancer nữ đang ở trong hàng chờ';
// echo '<pre>';
//     print_r($pairs);
//     print_r($nam_waiting);
//     print_r($nu_waiting);
// echo '</pre>';