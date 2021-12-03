<?php

namespace App\Produk;

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
