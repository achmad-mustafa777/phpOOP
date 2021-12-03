<?php

require_once 'App/init.php';

use App\Produk\Novel as Novel;
use App\Produk\Game as Game;
use App\Produk\CetakInfoProduk as CetakHentai;

$produk1 = new Novel('The Screat of Heacker', 'Achmad', 'Pustaka Logika', 600000, 100);
$produk2 = new Game('Detectiv Hentai', 'Sugiono', 'Shonan Hentai', 20000, 50);

$cetakProduk = new CetakHentai();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();

echo "<hr>";

use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

new ServiceUser();
echo "<br>";
new ProdukUser();
/*
! Namespace
todo: buat class dengan nama yang sama, dengan nama class User di folder produk & service
todo: tambahkan keyword namespace diawal program untuk membedakan class yang memiliki nama yang sama
todo: instaniasinya harus menggunakan namespace juga
todo: menambahkan alias "use" & "as" agar tidak kepanjangan namespacenya
*/