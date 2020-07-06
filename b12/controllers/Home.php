<?php
    namespace b12\controllers;
    use b12\model\User;//vi ta da dinh danh ben model roi nen muon goij no ra thi ta phai dung
//    use goi lai dinh danh va goi den ten class do

    require 'models/User.php';

    class Home{
        public function index(){
            //nhiem vu goi ham getAllDataUser trong nay
            $user = new User;//vi ta da require roi nen co the dinh khoi tao doi tuong
            $data = $user->getAllDataUsers();
            echo "<br>";
            print_r($data);
        }
    }

    $home = new Home();
    $home->index();
