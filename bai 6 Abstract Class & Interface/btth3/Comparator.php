<?php
//khai báo interface
interface Comparator
{
    //phương thức trừu tường
    function compare(object $circleOne,object $circleTwo);
}

//khởi tạo lớp  CircleComparator được triển khai từ Comparator
class CircleComparator implements Comparator
{
    //khai báo lại  phương thức compare có phần thần
    public function compare(object $circleOne, object $circleTwo): int
    {
        //
        $radiusOne = $circleOne->getRadius();
        $radiusTwo = $circleTwo->getRadius();

        if ($radiusOne > $radiusTwo) {
            return 1;
        } else if ($radiusOne < $radiusTwo) {
            return -1;
        } else {
            return 0;
        }
    }
}

