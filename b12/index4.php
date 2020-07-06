<?php
    require "app/controllers/Home.php";

    use app\controllers\Home;

    $home = new Home;
    $home->index();