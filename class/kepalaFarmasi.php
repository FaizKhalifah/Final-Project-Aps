<?php
require_once("obat.php");
    class KepalaFarmasi{
        private int $id;
        private string $nama;
        
        public function __construct($id,$nama){
            $this->id=$id;
            $this->nama=$nama;
        }

        public function getId():int{
            return $this->id;
        }

        public function getNama():string{
            return $this->nama;
        }

        public function createObat($idObat,$namaObat,$dosisObat,$biaya):Obat{
            $newObat = new Obat($idObat,$namaObat,$dosisObat,$biaya);
            return $newObat;
        }
    }
?>