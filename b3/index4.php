<?php
//mang thong tin thanh pho
$cities =[
    [
        'id'=>1,
        'Name'=>'Ha Noi'
    ],
    [
        'id'=>2,
        'Name'=>'Tp.HCM'
    ],
    [
        'id'=>3,
        'Name'=>'Da Nang'
    ],
    [
        'id'=>4,
        'Name'=>'Hai Phong'
    ],
    [
        'id'=>5,
        'Name'=>'Nam Dinh'
    ],
];
$districts = [
    [
        'id'=>1,
        'city_id'=>1,
        'name_dist' =>'Ba Dinh'
    ],
    [
        'id'=>2,
        'city_id'=>1,
        'name_dist' =>'Hoan Kiem'
    ],
    [
        'id'=>3,
        'city_id'=>2,
        'name_dist' =>'Quan 1'
    ],
    [
        'id'=>4,
        'city_id'=>2,
        'name_dist' =>'Quan cam'
    ],
    [
        'id'=>5,
        'city_id'=>3,
        'name_dist' =>'Quan Hai Chau'
    ],
    [
        'id'=>6,
        'city_id'=>3,
        'name_dist' =>'Quan Ngu Hanh Son'
    ],
    [
        'id'=>7,
        'city_id'=>4,
        'name_dist' =>'Quan Le Chan'
    ],
    [
        'id'=>8,
        'city_id'=>4,
        'name_dist' =>'Kien An'
    ],
    [
        'id'=>9,
        'city_id'=>5,
        'name_dist' =>'Ninh Kieu'
    ],
    [
        'id'=>10,
        'city_id'=>5,
        'name_dist' =>'Cai Rang'
    ],
];
//foreach ($districts as $key=>$value){
//    foreach ($cities as $k =>$item){
//        if($value['city_id']==$item['id']){
//            $districts[$key]['name_city']=$item['Name'];
//        }
//    }
//}
foreach ($cities as $key=>$item){
    foreach ($districts as $k =>$val){
        if($item['id']==$val['city_id']){
            //gan thong tin cua quan  huyen vao trong tinh thanh
            $cities[$key]['list_dist'][$val['id']]=$val;
        }
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Array php</title>
</head>
<body>
<div class="container">
    <div style="text-align: center">
        <h1 class="text-danger m-auto">Tong tin nhan vien</h1>
        <table width="100%" border="1" cellpadding="0" cellspacing="0">
            <thead>
            <tr>
                <th class="text-primary">Id-TP</th>
                <th class="text-primary">Thanh pho</th>
                <th class="text-primary">Quan</th>

            </tr>
            </thead>
            <tbody>
            <?php foreach ($cities as $key =>$item):?>
                <tr>
                    <td><?php echo $item['id']; ?></td>
                    <td><?php echo $item['Name']; ?></td>
                    <td></td>
                </tr>
            <?php foreach ($item['list_dist'] as $k => $val): ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td><?php echo $val['name_dist']; ?></td>
                </tr>
                <?php endforeach; ?>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
