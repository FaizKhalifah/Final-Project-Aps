<?php
    require_once("layanan.php");
    class ProductManager{
        private int $idProjectManager;
        private string $namaProjectManager;

        public function __construct($idProjectManager,$namaProjectManager){
            $this->idProjectManager=$idProjectManager;
            $this->namaProjectManager=$namaProjectManager;
        }

        public function getId():int{
            return $this->idProjectManager;
        }

        public function getNama():string{
            return $this->namaProjectManager;
        }

        public function createLayanan($idLayanan,$namaLayanan,$biayaLayanan):Layanan{
            $newLayanan = new Layanan($idLayanan,$namaLayanan,$biayaLayanan);
            return $newLayanan;
        }
    }
?>