<?php
 //dinh nghia namespace
   namespace b12\model;//dinh danh xem  cai file nay nam o dau trong thu muc
   class User
   {
       public function getAllDataUsers()
       {
           return [
               [
                   'id' => 1,
                   'username' => 'vanteo',
                   'age' => 20
               ],
               [
                   'id' => 2,
                   'username' => 'vanty',
                   'age' => 30
               ]
           ];
       }
   }
