<?php

interface infoProduk
{
  public function getInfoLengkap();
}



abstract class Produk
{
  protected $judul;
  protected $penulis;
  protected $penerbit;
  protected $diskon;
  protected $harga;



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


  abstract public function getInfo();
}


// ! Novel
class Novel extends Produk implements infoProduk
{
  private $halaman;

  public function __construct($judul, $penulis, $penerbit, $harga, $halaman)
  {
    parent::__construct($judul, $penerbit, $penulis, $harga);
    $this->halaman = $halaman;
  }

  public function getInfo()
  {
    $str = " {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

    return $str;
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

  public function getInfo()
  {
    $str = " {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

    return $str;
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
! Syarat  Interface
* Tidak boleh memiliki properti cuman method yang dimiliki
* visibility method harus berupa public
* murni untuk kelas turunannya sebagai template
* boleh mendeklarasikan __construck
* boleh mengimpelntasikan satu class untuk banyak interface

todo: buat kelas interface infoProduk dengan method getInfoLengkap()
todo: implementasiakn class interface ke kelas turunannya
*/