<?php
    require_once("layanan.php");
    require_once("obat.php");

    class Order{
        private int $id;
        private array $layanan;
        private array $obat;
        private string $tanggalOrder;

        private float $biayaTotal;

        public function __construct($id,$tanggalOrder){
            $this->id=$id;
            $this->layanan=[];
            $this->obat=[];
            $this->biayaTotal=0;
            $this->tanggalOrder=$tanggalOrder;
        }

        public function getId():int{
            return $this->id;
        }

        public function getLayanan():array{
            return $this->layanan;
        }

        public function getObat():array{
            return $this->obat;
        }

        public function getTanggal():string{
            return $this->tanggalOrder;
        }

        public function addLayanan(Layanan $layanan){
            array_push($this->layanan,$layanan);
            $this->AddBiaya($layanan->getBiaya());
            return;
        }

        public function addObat(Obat $obat){
            array_push($this->obat,$obat);
            $this->AddBiaya($obat->getBiaya());
            return;
        }

        public function AddBiaya(float $biaya){
            $this->biayaTotal+=$biaya;
            return;
        }

        public function getTotal():float{
            return $this->biayaTotal;
        }

        public function cetak(string $klinik, string $alamat, string $dokter, string $pasien, string $pembayaran){
            echo "Rumah Sakit $klinik"."\n";
            echo $alamat."\n";
            echo "========================================================="."\n";
            echo "pasien : $pasien"."\n";
            echo "dokter : $dokter"."\n";
            echo "Layanan yang diterima : "."\n";
            foreach($this->layanan as $layanan){
                echo $layanan->getNama()."\t".$layanan->getBiaya()."\n";
            }
            echo "Obay yang dibeli : "."\n";
            foreach($this->obat as $obat){
                echo $obat->getNama()."\t".$obat->getBiaya()."\n";
            }
            echo "Dengan total biaya : ".$this->biayaTotal."\n";
            echo "Metode Pembayaran : ".$pembayaran;
        }
    }
?>