<?php
//kiem tra nguoi dung bam nut sum or ta kiem tra co method post gui len ko
if(isset($_REQUEST['btnSum'])){
    $hsa = $_REQUEST['number1']  ?? 0;
    $hsa = is_numeric($hsa) ? $hsa : '';

    $hsb = $_REQUEST['number2'] ?? 0;
    $hsb = is_numeric($hsb) ? $hsb : '';

    //lay du lieu tu the seletc
//    $gender = $_POST['gender'] ?? '';
//    echo $gender;
//    $agr = $_POST['agree'] ?? '';
//    echo $agr;
    $ra_agr = $_REQUEST['radioCheck'] ?? '';
    echo $ra_agr;
    die();
    if(empty($hsb) || empty($hsa)){
        echo "<b style='color: red'>vui long nhap so</b>";
    }else{
        $sum = $hsa+$hsb;
        echo $sum;
    }
}