<?php
    require_once("class/klinik.php");
    require_once("class/admin.php");
    require_once("class/kepalaFarmasi.php");
    require_once("class/productManager.php");
    require_once("class/pasien.php");
    require_once("class/order.php");
    require_once("class/pembayaran.php");
    require_once("class/dokter.php");

    $admin = new Admin(5431231,"Faiz","faasdas");
    $pelanggan = new Pasien(45132,"Ghaza","08912123");
    $productManager = new ProductManager("544","Pak Andi");
    $kepalaFarmasi = new KepalaFarmasi("45","Pak Eko");
    $dokter = new Dokter(405,"Dr. Hery");
    $pembayaran = new Pembayaran(604,"cash");

    //Membuat layanan
    $fisioterapi = $productManager->createLayanan(991,"fisioterapi",500000);
    $bekam = $productManager->createLayanan(992,"bekam",340000);
    $cuciDarah = $productManager->createLayanan(993,"cuci darah",550000);

    //Membuat Obat
    $nelco = $kepalaFarmasi->createObat(801,"nelco","2 kali sehari",40000);
    $terimaAngin = $kepalaFarmasi->createObat(802,"terima angin","4 kali sehari",35000);

    $klinik = new Klinik(12,"Klinik Anak","Jalan veteran");
    $order1 = $admin->createOrder(301,"2 september 2024");
    $order1->addLayanan($fisioterapi);
    $order1->addLayanan($cuciDarah);
    $order1->addObat($nelco);
    $order1->cetak($klinik->getNama(),$klinik->getAlamat(),$dokter->getNama(),$pelanggan->getName(),$pembayaran->getMetode());

?>