<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">
                <h1 class="text-center my-3 text-danger">App Weather</h1>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="nameCity" placeholder="Name of city">
                    <div class="input-group-append">
                        <button class="input-group-text btn btn-primary" id="btnSearch">Search</button>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col" id="result"></div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript">
        //viet ajax
        $(function () {
            $('#btnSearch').click(function () {
                let nameCity = $('#nameCity').val().trim();//lay ra gia tri cua the input
                if(nameCity.length >0){//check do dai
                    $.ajax({//tao ajax //kieu cua ajax la doi tuong object
                        url:"server/weather.php",
                        type:"post",//phuong thuc
                        data:{name:nameCity},//du lieu phia server
                        beforeSend:function () {//truoc  khi gui data len thi se lam gi
                                $('#btnSearch').text('Loading...');//in text ra
                        },
                        success:function (data) {
                            $('#btnSearch').text('Search');
                            $('#result').html(data);

                        }
                    });
                }
            });
        });
    </script>
</body>
</html>