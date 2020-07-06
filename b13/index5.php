<?php
    require 'vendor/autoload.php';

    //su dung controller
    use app\controller\HomeController;
    $home = new HomeController();
    $home->index();

