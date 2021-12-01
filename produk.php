<?php

abstract class Produk
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

  abstract public function getInfoLengkap();

  public function getInfo()
  {
    $str = " {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

    return $str;
  }
}


// ! Novel
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
    $str = "Novel :" . $this->getInfo() . " - {$this->halaman} halaman";
    return $str;
  }

  public function getHarga()
  {
    return parent::getHarga();
  }
}


//! Gameing
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
    $str = "Game : " . $this->getInfo() . " ~ {$this->waktuMain} jam";
    return $str;
  }
}


class CetakInfoProduk
{
  public $daftarProduk = [];

  public function tambahProduk(Produk $produk)
  {
    $this->daftarProduk[] = $produk;
  }

  public function cetak()
  {
    $str = "Daftar Produk: <br>";

    foreach ($this->daftarProduk as $p) {
      $str .= "- {$p->getInfoLengkap()} <br>";
    }

    return $str;
  }
}


$produk1 = new Novel('The Screat of Heacker', 'Achmad', 'Pustaka Logika', 600000, 100);
$produk2 = new Game('Detectiv Hentai', 'Sugiono', 'Shonan Hentai', 20000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();



/*
! BAB  Abstraksi
todo: Membuat class CetakInfoProduk untuk mencetak /menampilkan banyak produk segaligus sebelum masuk ke kelas abstrak
? Didalam class CetakInfoProduk :
  * 1.membuat sebuah properti berupa array kosong yang akan menyimpan objek kelas produk yang akan dicetak langsung
  * 2.membuat sebuah method yang berfungsi untuk menambah/mengisi pada properti array yang akan dicetak produknya
  * 3.membuat sebuah method yang berfungsi mencetak / membangun string yang ada pada array kosong dengan menggunakan -
  *   looping foreach


! Masuk ke Class Abstrak
todo: menambahkan keyword abstrak pada class Produk 
todo: menambahkan keyword abstrak pada method getInfoLengkap() pada class Produk 

*/