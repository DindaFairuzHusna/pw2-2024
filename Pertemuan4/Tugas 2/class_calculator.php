<?php
/**
 * Task 1
 * Buatlah class Calculator 2 bilangan
 * Method: Pertambahan, Pengurangan, Pembagian dan Perkalian
 * Tampilkan masing-masing method dengan object
 */
class Calculator {
    private $number1;
    private $number2;

    public function __construct($number1, $number2) {
         // code..
    $this->F=$number1;
    $this->Z=$number2; 
    }

     // Method lainnya
    public function getTambah(){
    return $this->F + $this->Z;
    }

    public function getKurang() {
    return $this->F - $this->Z;    
    }

    public function getPerkalian() {
    return $this->F * $this->Z;
    }

    public function getPembagian() {
    return $this->F / $this->Z;
    }  
}

     // Buat object dan tampilkan masing-masing method
   $Calculator = new Calculator(30,25);

   echo "<br>Hasil Tambah = " . $Calculator->getTambah();
   echo "<br>Hasil Kurang = " . $Calculator->getKurang();
   echo "<br>Hasil Perkalian = " . $Calculator->getPerkalian();
   echo "<br>Hasil Pembagian = " . $Calculator->getPembagian();

?>