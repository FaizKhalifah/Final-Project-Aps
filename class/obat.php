<?php
    class Obat{
        private int $id;
        private float $biaya;
        private string $namaObat;
        private string $dosisObat;

        public function __construct($id,$namaObat,$dosisObat,$biaya){
            $this->id=$id;
            $this->namaObat=$namaObat;
            $this->dosisObat=$dosisObat;
            $this->biaya=$biaya;
        }

        public function getId():int{
            return $this->id;
        }

        public function getNama():string{
            return $this->namaObat;
        }

        public function getDosis():string{
            return $this->dosisObat;
        }

        public function getBiaya():float{
            return $this->biaya;
        }
    }

?>