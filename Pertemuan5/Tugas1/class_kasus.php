<?php
class Hewan {
    protected $nama;
    protected $warna;
    protected $tempat_tinggal;
    
    protected function __construct($nama, $warna, $tempat_tinggal){
        $this->nama = $nama;
        $this->warna = $warna;
        $this->tempat_tinggal = $tempat_tinggal;
    }

    protected function getInfoHewan(){
        echo "Nama Hewan: " . $this->nama . "<br>";
        echo "Warna: " . $this->warna . "<br>"; 
        echo "Tempat Tinggal: " . $this->tempat_tinggal . "<br>"; 
    }
}

class Kupu_kupu extends Hewan {
    public $harga;

    public function __construct($nama, $warna, $tempat_tinggal, $harga){
        parent::__construct($nama, $warna, $tempat_tinggal);
        $this->harga = $harga;
    }

    public function getInfoHewan(){
        parent::getInfoHewan();
        echo "Harga: " . $this->harga . "<br>";
    } 
}


class Anjing extends Hewan {
    public $jenis;
    public $harga;

    public function __construct($nama, $jenis, $harga){
        parent::__construct($nama, "", "");
        $this->jenis = $jenis;
        $this->harga = $harga;
    }

    public function getInfoHewan(){
        parent::getInfoHewan();
        echo "Jenis: " . $this->jenis . "<br>";
        echo "Harga: " . $this->harga . "<br>";
    }
}
?>
