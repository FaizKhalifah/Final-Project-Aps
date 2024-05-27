<?php
    class Klinik{
        private int $id;
        private string $nama;
        private string $alamat;

        public function __construct($id,$nama,$alamat){
            $this->id=$id;
            $this->nama=$nama;
            $this->alamat=$alamat;
        }

        public function getId():int{
            return $this->id;
        }

        public function getNama():string{
            return $this->nama;
        }

        public function getAlamat(){
            return $this->alamat;
        }
    }