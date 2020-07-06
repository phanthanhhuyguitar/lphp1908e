<?php
   require 'controllers/Home.php';
   use b12\controllers\Home as HomeControler;//vi  cai file dag goi co namespace
                               //doi ten class nhung ban chat thi ten class khong doi
   $home = new HomeControler();
   $home->index();


