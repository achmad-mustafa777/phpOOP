<?php

require_once 'App/init.php';

$produk1 = new Novel('The Screat of Heacker', 'Achmad', 'Pustaka Logika', 600000, 100);
$produk2 = new Game('Detectiv Hentai', 'Sugiono', 'Shonan Hentai', 20000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();
