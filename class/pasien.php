<?php
    class Pasien{
        private int $id;
        private string $name;
        private string $nomorTelepon;

        public function __construct(int $id, string $name, string $nomorTelepon){
            $this->id=$id;
            $this->name=$name;
            $this->nomorTelepon=$nomorTelepon;
        }
        
        public function getId():int{
            return $this->id;
        }
        public function getName():string{
            return $this->name;
        }

        public function getNomorTelepon():string{
            return $this->nomorTelepon;
        }
    }
?>