<?php
    class Dokter{
        private int $id;
        private string $nama;

        public function __construct($id, $nama){
            $this->id=$id;
            $this->nama=$nama;
        }

        public function getId():int{
            return $this->id;
        }

        public function getNama():string{
            return $this->nama;
        }
    }
?>