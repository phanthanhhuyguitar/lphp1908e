<?php
//     giup kiem tra xem nguoi dung dang nhap chua thi moi vao trang home
function checkUserLogin(){
    if(!isset($_SESSION['username'])){
        //neu khong ton tai session//vi khi ta da xoa session thi xem nhu da logout ra ngoai roi
        header("Location: login.php");
        die();
    }
}
