<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1>Danh sach nguoi dung</h1>
   <table border="1" width="100%" cellpadding="0" cellspacing="0">
       <thead>
           <tr>
               <th>Id</th>
               <th>Name</th>
               <th>Pass</th>
           </tr>
       </thead>
       <tbody>
           <?php foreach ($data as $key=>$item) : ?>
           <tr>
               <td><?php echo $item['id']; ?></td>
               <td><?php echo $item['name']; ?></td>
               <td><?php echo $item['pass']; ?></td>
           </tr>
           <?php endforeach; ?>
       </tbody>
   </table>
</body>
</html>
