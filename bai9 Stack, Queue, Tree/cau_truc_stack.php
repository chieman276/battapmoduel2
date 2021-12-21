<?php
class Elements {
    //khai báo thuộc tính
    public $stack = [];
    public $limit;
    //khai báo phương thức
    //khai báo construct
    public function __construct($ts_limit)
    {
        $this->limit = $ts_limit;

        
    }
    //thêm phần tử vào stack
    public function push($item){
        array_unshift($this->stack,$item);
    }
    //lấy một phần tử stack
    public function pop(){
        array_shift($this->stack);
    }
    // để hiển thị phần tử trên cùng của stack
    public function top(){
        return current($this->stack);
    }
    // để kiểm tra xem stack có rỗng hay không
    public function isEmpty(){
        if (count($this->stack) == 0){
            return true;
        } else {
            return false;
        }
    }

}
//khởi tạo Elements
$elements = new Elements(5);
$elements->push("an01");
$elements->push("an02");
$elements->push("an03");
$elements->push("an04");
$elements->push("an05");

//lấy ra 3 phần tử
 $elements->pop();
 $elements->pop();
 $elements->pop();
//thêm vào 2 phần tử mới vào stack
$elements->push("an07");
$elements->push("an08");
//kiểm tra xem stack có rỗng hay không
var_dump($elements->isEmpty());
//lấy ra 4 phần tử khỏi stack
$elements->pop();
$elements->pop();
$elements->pop();
$elements->pop();
//
var_dump($elements->isEmpty());




echo "<pre>";
print_r($elements);
echo "</pre>";
?>