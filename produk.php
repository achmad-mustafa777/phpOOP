<?php

class Produk
{
  public $judul;
  public $penulis;
  public $penerbit;
  public $harga;
  public $jumlah;


  public function __construct($a = "judul", $b = "penulis", $c = "penerbit", $d = 0, $e = 0)
  {
    $this->judul = $a;
    $this->penulis = $b;
    $this->penerbit = $c;
    $this->harga = $d;
    $this->jumlah = $e;
  }


  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";

    //properti $this berfungsi untuk mengambil properti yang ada didalam kelas untuk yang bersangkutan
  }

  public function getInfoLengkap()
  {
    $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

    return $str;
  }
}


class Novel extends Produk
{
  public function getInfoLengkap()
  {
    $str = "Novel : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) {$this->jumlah} - halaman";
    return $str;
  }
}

class Game extends Produk
{
  public function getInfoLengkap()
  {
    $str = "Game : {$this->judul} | {$this->getlabel()} (Rp. {$this->harga}) {$this->jumlah} ~ jam";
    return $str;
  }
}


class CetakInfoProduk
{
  public function cetak(Produk $produk) //artinya fungsi cetak hanya mau menerima parameter dari kelas objek Produk
  {
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp.{$produk->harga}) ";

    return $str;
  }
}


$produk1 = new Novel('The Screat of Heacker', 'Achmad', 'Pustaka Logika', 150000, 100);
$produk2 = new Game('Detectiv Hentai', 'Sugiono', 'Shonan Hentai', 20000, 50);

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
