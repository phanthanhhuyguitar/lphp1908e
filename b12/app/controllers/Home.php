<?php
   namespace app\controllers;

   require 'app/models/User.php';

   use app\models\User;

   class Home
   {
       private $user;//xem nhu la mot doi tuong user
       public function __construct()
       {
           $this->user = new User();
       }
       public function index()
       {
           $data = $this->user->getDataUser();
           require 'app/views/home_view.php';
       }
   }
