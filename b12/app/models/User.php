<?php
    namespace app\models;

    require 'app/configs/database.php';//require de file db

    use app\configs\Database;//dung class của file trong thu muc config


    class User extends Database
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function getDataUser()
        {
            $data = [];
            if($this->db){
                $data = [
                    [
                        'id' => 1,
                        'name' => 'admin',
                        'pass' => '12345'
                    ]
                ];
            }
            return $data;
        }
    }

