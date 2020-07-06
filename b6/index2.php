<?php
   require 'index.php';//nhung file index.php sang index2
    $number2 = 200;
    //$number1 = 100;
//include 'index.php';
//include_once 'index.php';
    $total  = $number2 + $number1;
    echo $total;
    header('Location:index.php');
