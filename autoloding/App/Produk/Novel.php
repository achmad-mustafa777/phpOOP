<?php

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
