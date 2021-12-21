<?php
class MyList {
    //khai báo thuộc tính
    public int $size; 
    public array  $elements = [];
    //khai báo thuộc tính
    //chèn phần tử vào mảng
    public function insert($index, $item): void{// index chỉ số của mảng; $obj là một phần tử
        array_splice($this->elements, $index,0,$item);//elements =['Ngan','An']; array_splice($this->elements,1,0,'tuan');
    }
    //thêm 1 phần tử vào mảng
    public function add($item): void{
        array_push($this->elements, $item);
        
    }
    //xóa và thay thế phần tử trong mảng
    public function remove($index): void {
        array_splice($this->elements, $index,1);
    }
    //lấy ra giá trị phần tử
    public function get($index) {
        return ($this->elements[$index]);
    }
    //xóa tất cả phần tử trong mảng
    public function clear(): void{ //
        $this->elements = [];
    }
    //gán mảng này cho mảng khác
    public function addAll($arr){
        if (is_array($arr)) {
            return $this->elements = $arr ;
        } else {
            echo "ERROR";
            
        }
    }
    //trỏ vào vị trí phần tử trong mảng
    public function indexOf($item) {
        echo (array_search($this->elements,$item,true));
    }
    //kiểm tra danh sách có rỗng hay không
    public function isEmpty() {
        if (count($this->elements) == 0){
            return true;
        } else {
            return false;
        }
    }
    //sắp xếp các phần tử trong mảng
    public function sort(){
        return sort($this->elements);
    }
    //load lại mảng 
    public function reset(){
        return reset($this->elements);
    }
    // kiểm tra kích thước của mảng
    public function size(){
        return sizeof($this->elements);
    }

}
$mylist = new MyList();
 $mylist->add("AN");
 $mylist->add("Tuấn");
 $mylist->add("Cô Ngân TV");
 $mylist->add("Captain Thùy");
 $mylist->add("Khởi tạo C10 bằng 2 bàn tay!!");
 $mylist->insert(2,"C10");
 $mylist->remove(1);
 $mylist->get(2);
//  $mylist->addAll($arr =5 );
$mylist->sort();


echo "<pre>";
print_r($mylist);
echo "</pre>";
