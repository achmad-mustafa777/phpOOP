<?php

class Produk
{
  private $judul;
  private $penulis;
  private $penerbit;
  private $diskon;
  private $harga;



  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }


  public function setHarga($harga)
  {
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


  public function setJudul($judul)
  {
    $this->judul = $judul;
  }

  public function getJudul()
  {
    return $this->judul;
  }

  public function setPenerbit($penerbit)
  {
    $this->penerbit = $penerbit;
  }

  public function getPenerbit()
  {
    return $this->penerbit;
  }

  public function setPenulis($penulis)
  {
    $this->penulis = $penulis;
  }

  public function getPenulis()
  {
    return $this->penulis;
  }

  public function setDiskon($diskon)
  {
    $this->diskon = $diskon;
  }
}

//Novel
class Novel extends Produk
{
  private $halaman;

  public function __construct($judul, $penulis, $penerbit, $harga, $halaman)
  {
    parent::__construct($judul, $penerbit, $penulis, $harga);
    $this->halaman = $halaman;
  }

  public function getInfoLengkap()
  {
    $str = "Novel :" . parent::getInfoLengkap() . " - {$this->halaman} halaman";
    return $str;
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


$produk1 = new Novel('The Screat of Heacker', 'Achmad', 'Pustaka Logika', 600000, 100);
$produk2 = new Game('Detectiv Hentai', 'Sugiono', 'Shonan Hentai', 20000, 50);
$produk3 = new Novel('The Hacker', 'mustafa', 'Pustaka Logika', 300000, 110);

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
echo "<br>";
echo $produk3->getInfoLengkap();
echo "<hr>";

$produk3->setHarga(400000);
$produk3->setJudul('The Black Phantom Humble');
echo "Harga buku  sebelum diskon dengan judul {$produk3->getJudul()} (Rp. {$produk3->getHarga()})";
echo "<br>";
$produk3->setDiskon(20);
echo "Harga buku {$produk3->getJudul()} setelah diskon 20% (Rp. {$produk3->getHarga()})";
