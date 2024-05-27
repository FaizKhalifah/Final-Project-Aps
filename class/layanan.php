<?php 
    class Layanan{
        private int $idLayanan;
        private string $namaLayanan;
        private float $biayaLayanan;

        public function __construct($idLayanan,$namaLayanan,$biayaLayanan){
            $this->idLayanan=$idLayanan;
            $this->namaLayanan=$namaLayanan;
            $this->biayaLayanan=$biayaLayanan;
        }

        public function getId():int{
            return $this->idLayanan;
        }

        public function getNama():string{
            return $this->namaLayanan;
        }

        public function getBiaya():float{
            return $this->biayaLayanan;
        }
    }

?>