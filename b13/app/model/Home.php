<?php
    namespace app\model;
    class Home
    {
        public function getAllData()
        {
            return[
                [
                    'id'=>1,
                    'username'=>'admin',
                    'password'=>'12345',
                    'email'=>'admin@gmail.com',
                    'address'=>'Ha Noi'
                ],
                [
                    'id'=>2,
                    'username'=>'admin2',
                    'password'=>'12345',
                    'email'=>'admin2@gmail.com',
                    'address'=>'Hai Phong'
                ]
            ];
        }
    }
