<?php
class StopWath{
    //khai báo thuộc tính
    private  $startTime=0;
    private $endTime=0;

    //Phương thức start() để reset startTime về thời gian hiện tại của hệ thống.
    function start(){
        $this->startTime = microtime(true);//4h38p20s
        return $this->startTime;
    }

    //Phương thức stop() để thiết đặt endTime về thời gian hiện tại của hệ thống.

    function stop(){
        $this->endTime = microtime(true);//4h38p21s
        return $this->endTime;
    }
    //Phương thức getElapsedTime() trả về thời gian đã trôi qua theo số milisecond giây
    function getElapsedTime(){
        return ($this->endTime - $this->startTime );
    }
}
//khởi tạo đốitượng
$stopwath = new StopWath(15,89);
//bấm giờ 
$stopwath->start();
// echo $stopwath->start();
// echo "<br>";
// echo $stopwath->stop();

usleep(100);

echo "<br>";
//dừng đồng hồ
$stopwath->stop();

//thoiwg gian đã trôi qua
echo $stopwath->getElapsedTime();

