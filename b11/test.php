<?php
class testA{
    private $a;
    private $b;
    public function getSum($a,$b){
        return $a+$b;
    }
}
class testB extends testA{
    private $a;
    private $b;
    public function getSub($a,$b){
        return $a-$b;
    }
}
//khi bao doi tuong
$object = new  testA;
$objectB = new  testB;
$vald = $objectB->getSum(4,5);
echo "{$vald}";