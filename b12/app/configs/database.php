<?php
    namespace app\configs;
    class Database
    {
        protected $db;//ngam hieu co noi ke thua lai

        public function __construct()
        {
            $this->connection();
        }

        private function connection()
        {
            //sai nay se viet ket noi toi csdl
            $this->db = true;
        }
        public function __destruct()
        {
            $this->db = null;
        }
    }
