<?php
//    function getDataWeatherByCity($nameCity){
//      //call aip o day
//     $api = " http://api.openweathermap.org/data/2
//        .5/forecast?q={$nameCity}&appid=073f342f34bacc8898356a523fa5b4f8&units=metric&lang =vi&fbclid=IwAR1DPf54s3k8HpFs6dwRzvQAvDkEsHe0pQcfxgkv66axePN_jg0oTanqum4";
//     //khoi tao curl
//     $ch = curl_init();//khoi tao
//     //cho phep truy cap vao url - api
//        curl_setopt($ch, CURLOPT_URL, $api);//gan url bang api
//        curl_setopt($ch, CURLOPT_HEADER, false);//khong quan den ket qua url
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);//muon no khong hien thi ngay ma phai tra data ve|RETURNTRANSFER:khong hien thi cai gi ve
//        curl_setopt($ch, CURLOPT_TIMEOUT, 30);//nguoi dung chi cho 30 giay
//
//        $respone = curl_exec($ch);
//        print_r($respone);
//        die();
//        curl_close($ch);//ket thuc
////        covert ve mang php vi no la kieu resun
//        $respone = json_decode($respone, true);//tra ve  mang
//        return $respone;
//    }

function getDataWeatherByCity($nameCity)
{
    // call api tai day
//http://api.openweathermap.org/data/2.5/forecast?q=Tokyo&appid
//=073f342f34bacc8898356a523fa5b4f8&units=metric&lang=vi&fbclid=IwAR3y3ec7s
//PnKMZVb5zbMvkrUttRKlf4DXZnVqBvZX1s1apLj8qx8AIHvVx8

    $api = "http://api.openweathermap.org/data/2.5/forecast?q={$nameCity}&appid=073f342f34bacc8898356a523fa5b4f8&units=metric&lang=vi&fbclid=IwAR3y3ec7sPnKMZVb5zbMvkrUttRKlf4DXZnVqBvZX1s1apLj8qx8AIHvVx8";
//khoi tao curl
    $ch = curl_init();
//cho phep truy cap vao url - api
    curl_setopt($ch, CURLOPT_URL, $api);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);

    $respone = curl_exec($ch);
    curl_close($ch);
//convert ve mang php
    $respone = json_decode($respone, true);
    return $respone;
}
