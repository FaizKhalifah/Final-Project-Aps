<?php
    require_once("order.php");
    class Admin{
        private int $id;
        private string $nama;
        private string $password;

        public function __construct($id,$nama,$password){
            $this->id=$id;
            $this->nama=$nama;
            $this->password=$password;
        }

        public function getId():int{
            return $this->id;
        }

        public function getNama():string{
            return $this->nama;
        }

        public function getPassword():string{
            return $this->password;
        }

        public function createOrder($id,$tanggalLayanan):Order{
            $newOrder = new Order($id,$tanggalLayanan);
            return $newOrder;
        }
    }
?>