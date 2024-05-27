<?php
    class Pembayaran{
        private int $idPembayaran;
        private string $metodePembayaran;

        public function __construct($idPembayaran,$metodePembayaran){
            $this->idPembayaran=$idPembayaran;
            $this->metodePembayaran=$metodePembayaran;
        }

        public function getId():int{
            return $this->idPembayaran;
        }

        public function getMetode():string{
            return $this->metodePembayaran;
        }
    }
?>