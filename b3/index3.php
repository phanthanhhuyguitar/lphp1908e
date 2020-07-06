<?php
//   kien thuc ve mang
//tao mot mang bieu dien thong tin cho 3 phong lam viec
$room = [
    [
        'id' => 1,
        'name_room' => 'Hanh Chinh',
        'manager' => 'Van A',
        'year' => 2009
    ],
    [
        'id' => 2,
        'name_room' => 'To Chuc',
        'manager' => 'Thi B',
        'year' => 2009
    ],
    [
        'id' => 3,
        'name_room' => 'IT',
        'manager' => 'Van C',
        'year' => 2009
    ]
];
//tao mot mang bieu dien thing thong tin mot mang cua 3 nhan vien
$staffs = [
    [
        'id' => 113,
        'room_id' => 1,
        'name' => 'Nguyen thi no',
        'address' => 'Ha Noi',
        'money' => 10000
    ],
    [
        'id' => 114,
        'room_id' => 2,
        'name' => 'Nguyen chi pheo',
        'address' => 'Ca Mau',
        'money' => 22000
    ],
    [
        'id' => 113,
        'room_id' => 1,
        'name' => 'Nguyen thi no',
        'address' => 'Sai Gon',
        'money' => 12000
    ]
];
//can xu ly lay thong tin ten truong phong va ten phong do vao mang du lieu staffs tuong ung cho tung nhan vien
foreach ($staffs as $key => $item) {
    foreach ($room as $k => $val) {
        //can ohai xem nhan vien thuoc cac phong nao
        if ($item['room_id'] == $val['id']) {
            //can lay ten phong va ten  truong phong vao mang staff
            $staffs[$key]['name_manager'] = $val['manager'];
            $staffs[$key]['name_room'] = $val['name_room'];
            //           tu them vao           lay cua mang tren
        }
    }
}
echo '<pre>';
print_r($staffs);
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
                <th class="text-primary">Ma NV</th>
                <th class="text-primary">Ho Ten</th>
                <th class="text-primary">Ten Phong</th>
                <th class="text-primary">Truong phong</th>
                <th class="text-primary">Dia Chi</th>
                <th class="text-primary">Tien Luong</th>
            </tr>
            </thead>
            <tbody>
            <?php $totalMoney = 0; ?>
            <?php foreach ($staffs as $key => $item): ?>
            <?php $totalMoney +=is_numeric($item['money']) ? $item['money'] : 0 ; ?>
                <tr>
                    <td>
                        <?php echo $item['id']; ?>
                    </td>
                    <td>
                        <?php echo $item['name']; ?>
                    </td>

                    <td>
                        <?php echo $item['name_room']; ?>
                    </td>
                    <td>
                        <?php echo $item['name_manager']; ?>
                    </td>
                    <td>
                        <?php echo $item['address']; ?>
                    </td>
                    <td>
                        <?php echo $item['money']; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <td class="text-danger font-weight-bold" colspan="5">Tong tien</td>
                    <td><?php echo number_format($totalMoney) ?></td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
</body>
</html>
