<?php

class Point2D{
    //khởi tạo thuộc tính
    public $x;
    public $y;
    public $array;
    //khởi tạo phương thức
    function __construct($x,$y){

    //truyền vào tham số
        $this->x = $x;
        $this->y = $y;
        $this->array[] = $x;
        $this->array[] = $y;

    }
    function setX($x){
        $this->x = $x;
    }
    function setY($y){
        $this->y = $y;
    }
    function getX(){
        return $this->x;
    }
    function getY(){
        return $this->y;
    }
    function setXY($x, $y){
        $this-> x = $x;
        $this-> y = $y;
        return $this->array;
        
    }
    function getXY(){
        // return $this->x;
        // return $this->y;
        return $this->array;
    }
    function __toString(){
        return "Lớp Point 2D<br>";
    }
}
//khơi tạo lớp con 3d 
class Point3D extends Point2D{
    public $z;
    function __construct($x,$y,$z){
        parent::__construct($x, $y);
        $this->z = $z;
        $this->array[] = $z;
    }
    function setZ($z){
        $this->z = $z;
    }
    function getZ($z){
        return $this->z;
    }
    function setXYZ($x,$y,$z){
        $this->array =[];
        $this->x =$x;
        $this->x =$y;
        $this->x =$z;
        return $this->array;
    }
    function getXYZ(){
        return [$this->x, $this->y, $this->z];
    }
    function __toString(){
        return "lớp Point 3D";
    }       
}
//khởi tạo đối tượng từ lớp 2d
$point2d = new Point2D(2,4);
//truy cập hiển thị phương thức
echo implode(" ",$point2d->array);
echo $point2d->__toString();
//khởi tạp đối tượng từ lớp 3d
$point3d = new Point3D(2,4,6);
//truy cập hiển thị phương thức
echo implode(" ",$point3d->array);
echo $point3d->__toString();




