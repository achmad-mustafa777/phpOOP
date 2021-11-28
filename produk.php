<?php

class Produk
{
  public $judul;
  public $penulis;
  public $penerbit;
  public $harga;

  public function __construct($a = "judul", $b = "penulis", $c = "penerbit", $d = 0)
  {
    $this->judul = $a;
    $this->penulis = $b;
    $this->penerbit = $c;
    $this->harga = $d;
  }



  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";

    //properti $this berfungsi untuk mengambil properti yang ada didalam kelas untuk yang bersangkutan
  }
}


$produk1 = new Produk('The Screat of Heacker', 'Achmad', 'Pustaka Logika', 150000);
$produk2 = new Produk('Detectiv Hentai', 'Sugiono', 'Shonan Hentai', 20000);
$produk3 = new Produk('Dragonball');


echo "Novel : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
echo "Game Pasaran : " . $produk3->getLabel();
