<?php
   namespace app\model;


   class Product
   {
       public function getAllProduct()
       {
           return [
              [
                  'id'=>'1',
                  'name'=>'iPhone',
                  'price'=>2000
              ],
              [
                  'id'=>'1',
                  'name'=>'iPhone',
                  'price'=>1000
              ]
           ];
       }
   }
