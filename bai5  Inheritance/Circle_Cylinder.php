<?php
class Circle{
    //khởi tạo thuộc tính
    public $radius = 5;
    public $color ='blue';
    public function __construct($radius,$color)
    {
        $this->color = $color;
        $this->radius = $radius;
    }
    //khởi tạo phương thức
    public function setRadius($radius){
        $this->radius = $radius;

    }
    public  function getRadius(){
        return $this->radius;
    }
    public function setColor($color){
        $this->color = $color;
    }
    public function getColor(){
        return $this->color;
    }
    public function __toString(){
        return "Diện tích hình tròn:". pi() * pow($this->getRadius(), 2)."<br>";
       

    }
}
class Cylinder extends Circle{
    public $height = 6;

    public function __construct($height)
    {
        $this->height = $height;
    }
    //khởi tạo phương thức
    public function setHeight($height){
        $this->height = $height;
    }
    public function getHeight(){
        return $this->height;
    }
    public function __toString(){
       return "Thể tích hình trụ là:". pi() * pow($this->getRadius(),2 . $this->getHeight())."<br>";
       
    }
}
//khởi tạo lớp Cricle
$circle = new Circle(6,'yellow');
echo $circle->__toString();
echo "Hình tròn có màu:".$circle->getColor()."<br>";

//khởi tạo lớp Cylinder
$cylinder = new Cylinder(5);
echo $cylinder->__toString();
echo "Hình trụ có màu:" . $cylinder->getColor() . "<br>";