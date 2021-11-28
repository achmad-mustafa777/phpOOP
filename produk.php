<?php

class Produk
{
  public $judul;
  public $penulis;
  public $penerbit;
  public $harga;
  public $tipe;
  public $halaman;
  public $waktu;

  public function __construct($a = "judul", $b = "penulis", $c = "penerbit", $d = 0, $e = "tipe", $f = 0, $g = 0)
  {
    $this->judul = $a;
    $this->penulis = $b;
    $this->penerbit = $c;
    $this->harga = $d;
    $this->tipe = $e;
    $this->halaman = $f;
    $this->waktu = $g;
  }



  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";

    //properti $this berfungsi untuk mengambil properti yang ada didalam kelas untuk yang bersangkutan
  }

  public function getInfoLengkap()
  {
    $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    if ($this->tipe == 'Novel') {
      $str .= " - {$this->halaman} halaman";
    } else if ($this->tipe == 'Game') {
      $str .= " ~ {$this->waktu} jam";
    }

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


$produk1 = new Produk('The Screat of Heacker', 'Achmad', 'Pustaka Logika', 150000, 'Novel', 100, null);
$produk2 = new Produk('Detectiv Hentai', 'Sugiono', 'Shonan Hentai', 20000, 'Game', null, 50);

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
