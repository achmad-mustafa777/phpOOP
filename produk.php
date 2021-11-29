<?php

class Produk
{
  public $judul;
  public $penulis;
  public $penerbit;
  protected $diskon;
  private $harga;



  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }


  protected function getHarga()
  {

    return $this->harga - ($this->harga * $this->diskon / 100);
  }

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";

    //properti $this berfungsi untuk mengambil properti yang ada didalam kelas untuk yang bersangkutan
  }

  public function getInfoLengkap()
  {
    $str = " {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

    return $str;
  }
}

//Novel
class Novel extends Produk
{
  public $halaman;

  public function __construct($judul, $penulis, $penerbit, $harga, $halaman)
  {
    parent::__construct($judul, $penerbit, $penulis, $harga = 600000);
    $this->halaman = $halaman;
  }

  public function getInfoLengkap()
  {
    $str = "Novel :" . parent::getInfoLengkap() . " - {$this->halaman} halaman";
    return $str;
  }

  public function setDiskon($diskon)
  {
    $this->diskon = $diskon;
  }

  public function getHarga()
  {
    return parent::getHarga();
  }
}

//Gameing
class Game extends Produk
{
  public $waktuMain;

  public function __construct($judul, $penerbit, $penulis, $harga, $waktuMain)
  {

    parent::__construct($judul, $penerbit, $penulis, $harga);
    $this->waktuMain = $waktuMain;
  }

  public function getInfoLengkap()
  {
    $str = "Game : " . parent::getInfoLengkap() . " ~ {$this->waktuMain} jam";
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


$produk1 = new Novel('The Screat of Heacker', 'Achmad', 'Pustaka Logika', 0, 100);
$produk2 = new Game('Detectiv Hentai', 'Sugiono', 'Shonan Hentai', 20000, 50);

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
echo "<hr>";

$produk1->setDiskon(0);
echo "Harga setelah diskonnya adalah {$produk1->getHarga()}";
