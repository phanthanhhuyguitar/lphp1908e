<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax - Jquery</title>
    <link rel="stylesheet" href="../b6/css/bootstrap.css">

</head>
<body>
     <div class="container mt-5">
         <div class="row">
             <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-lg-12">
                 <div class="input-group mb-3">
                     <input type="text" class="form-control" placeholder="Ten ca si" id="js-keyword">
                     <div class="input-group-append">
                         <button class="btn btn-primary" id="js-search">Search</button>
                     </div>
                 </div>
             </div>
         </div>
         <div class="row mt-2">
             <div class="col-12">
                 <div style="display: none !important;" id="loading" class="d-flex justify-content-center">
                     <div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status">
                         <span class="sr-only">Loading...</span>
                     </div>
                 </div>
             </div>
             <div class="col-12" id="js-result"></div>
         </div>
     </div>
    <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
     <script type="text/javascript">
         $(function () {
             $('#js-search').click(function () {
                 let name = $('#js-keyword').val().trim();
                 if(name.length >0){
                     //goi ajax
                     $.ajax({
                         url:"server/ajax.php",//dia chi gui db len
                         type: "post",//phuong thuc(kieu )
                         data:{ nameSingle : name },//du lieu gui len
                         beforeSend: function () {//ham truoc khi nhan dk data ve thi chung ta la gi do
                             // bao hieu nguoi dung vui long doi ket qua tra ve
                             // hien thi show loading  ra
                             $('#loading').show();
                         },
                         success: function (result) {
                             // an loading data
                             $('#loading').attr('style','display: none !important');
                             //cho doi ket qua tu phia server tra
                             // du lieu tra ve thong qua tham so trong function result
                             result = $.trim(result);
                             if(result === 'blank'){
                                 alert('Vui long nhap du lieu');
                             }else{
                                 //hien thi ket qua len view
                                 $('#js-result').html(result);
                             }
                         }
                     });
                 }else{
                     alert('Vui long nhap du lieu');
                 }

             });
         });
     </script>
</body>
</html>