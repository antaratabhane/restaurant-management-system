<?php
    class db_connect{
        private $server="localhost";
        public $username="root";
        public $password="";
        public $database="restaurant";

        function connect(){
            $db=mysqli_connect($this->server,$this->username,$this->password,$this->database);
            return $db;
        }
    }
?>