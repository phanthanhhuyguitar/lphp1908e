<?php
// cac ki  thuat xu li ve mang
//mang mot chieu tuan  tu:la gia tri nam bien trong la mot gia tri
$fruit = ['cam','quyt','mit','buoi'];
//in mang khong duoc dung echo vi echo thi dung cho chuoi
//in mang dung print_r
//de de xem ta dung
echo '<pre>';
print_r($fruit);
echo "<br>";
//mang khong tuan  tu
$infoStuden=[
    'name' => 'Van Teo',
    'age' =>20,
    'email' =>'teo@gmail.com'
];
print_r($infoStuden);
//mang da chieu
$number = [1,2,3,4,5,[100,211,113],3,4,3,[-2,-1,4]];
print_r($number);
$indoCats=[
    [
        'name'=>'Tom',
        'age'=>50,
        'color'=>'blue',
        'country'=>['vietnam','USA','Lao']
    ],
    [
        'name'=>'Meo',
        'age'=>10,
        'color'=>'pink',
        'country'=>['Uc','TQ','HQ']
    ]
];
print_r($indoCats);
//truy cap mot phan  tu trong mang
//nameArray[key];
print_r($indoCats[0]['country'][1]);//truy nhap kieu cha con
echo '<br>';
$letValue='Cong hoa xa hoi chu nghia Viet Nam';
echo strstr($letValue,'hoa');
//duyet qua tat ca cac phan tu nam trong mang
$arrMyNumber=[1,2,3,4,5,6,7];
foreach ($arrMyNumber as $val){
    //cach duyet phan tu trong mang mot chieu
//    echo "key:{$key} - value:{$val}";
    echo " value:{$val}";
    echo "<br>";
}
//duyet mang da chieu
foreach ($indoCats as $k=>$item){
    echo "keyArray - {$k}";
    echo "<br>";
    echo "color: {$item['color']}";
    echo "<br>";
}
$persons = [
    [
        'name'=>'Nguyen Van Teo',
        'age'=>20,
        'infoworks'=>[
            [
                'name_work'=>'lap trinh vien',
                'money'=>100
            ],
            [
                'name_work' =>'Teacher',
                'money'=>50
            ]
        ]
    ],
    [
        'name'=>'Nguyen Van Ty',
        'age'=>24,
        'infoworks'=>[
            [
                'name_work'=>'ABC',
                'money'=>100
            ],
            [
                'name_work' =>'EFG',
                'money'=>500
            ]
        ]
    ]
];
foreach ($persons as $key=>$value){
   if(isset($value['infoworks'])){
       foreach ($value['infoworks'] as $k =>$item){
           echo "name work : {$item['name_work']}";
           echo "<br>";
       }
    }
}
$fooball = [];//khai bao mang rong
//tu them ki vao mang
$fooball['player']='baloteli';
$fooball['money']=100000;
echo '<pre>';
print_r($fooball);
$arrMyNumber2 = [1,2,3,4,5,6,7];
$newNumberArr=[];
//xuly lay ra tat ca so chan ho ra mang $newNumber;
foreach ($arrMyNumber2 as $ky => $vl){
    if($vl %2 == 0){
        $newNumberArr[]=$vl;
    }
}
echo '<pre>';
print_r($newNumberArr);

