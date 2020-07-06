<?php
    require 'bootstrap/Bootstrap.php';
    use bootstrap\Bootstrap;
    $app = new Bootstrap();


    //su dung controller
    use app\controller\HomeController;
    $home = new HomeController();
    $home->index();
