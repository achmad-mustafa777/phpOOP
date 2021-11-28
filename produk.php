<?php

class Produk
{
  public $judul = "judul",
    $penulis = "penulis",
    $penerbit = "penerbit",
    $harga = 0;

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";

    //properti $this berfungsi untuk mengambil properti yang ada didalam kelas untuk yang bersangkutan
  }
}

// $produk1 = new Produk();
// $produk1->judul = "Secret of Heacker";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Musasi Samuarai Gaiden";
// $produk2->propertiBaru = "makanya gunakan access privat";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Screat of Heacker";
$produk3->penulis = "Achmad";
$produk3->penerbit = "Pustaka Logika";
$produk3->harga = 150000;

$produk4 = new Produk();
$produk4->judul = "Detectife Hentai";
$produk4->penulis = "Simotho Konoha";
$produk4->penerbit = "Shonen Hentai";
$produk4->harga = 20000;

echo "Novel : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();
