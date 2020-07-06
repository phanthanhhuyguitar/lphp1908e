<?php
     namespace bootstrap;
    class Bootstrap{//auto file
        //class nay se la noi giup tu dong load cac file vao ung dung
        public function __construct()
        {
            //tu dong dang ki nap file
            spl_autoload_register(array($this,'_myAutoLoad'));
        }

        private function _myAutoLoad($nameFile){
            //$nameFile chinh la cai file can nap
            //lay ten file thong qua namespace va name class
            //App\Controller\HomeController;
            //can lay ra duong dan  cua file thong qua $nameFile;
            $nameFile = str_replace('\\','/',trim($nameFile,'\\')) . '.php';
            if(file_exists($nameFile)){
                 require $nameFile;
            }else{
                echo 'Not Found';
            }
        }
    }
