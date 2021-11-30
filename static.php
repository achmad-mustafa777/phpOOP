<?php

// class ContohStatic
// {

//   public static $angka = 1;

//   public static function halo()
//   {
//     return "Haloo sebanyak " . self::$angka++ . "kali <br>";
//   }
// }

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo ContohStatic::halo();

class Contoh
{
  public static $number = 1;

  public function sayHallo()
  {
    return "Ucapkan Salam Assalamualaikum sebanyak " . self::$number++ . " kali <br>";
  }
}


$obj = new Contoh();

echo $obj->sayHallo();
echo $obj->sayHallo();
echo $obj->sayHallo();

$obj2 = new Contoh();

echo "<hr>";
echo $obj2->sayHallo();
echo $obj2->sayHallo();
echo $obj2->sayHallo();


/*
* Nilai static akan selalu tetap walaupun sudah di instaniasi berulang kali
* Biasanya hanya digunakan untuk fungsi helper atau digunakan di kelas utility framework
 
 */