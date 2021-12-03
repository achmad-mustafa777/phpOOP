<?php

// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/CetakInfoProduk.php';
// require_once 'Produk/Novel.php';
// require_once 'Produk/Game.php';

//todo: menggunakan fungsi yang khusus auotloading semua class
// * dengan menjadikan parameternya sebagai function tanpa nama or close sure
//! but its not work!! on linux, whay?

function autoload($class)
{
  require_once __DIR__ . '/var/www/html/phpOOP/autoloding/App/Produk/' . str_replace('\\', '/', $class) . '.php';
}

spl_autoload_register('autoload');
