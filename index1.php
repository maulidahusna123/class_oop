<?php
class Fruit{
    public $name;
    public $color;

    function simpan_name($nama){
        $this->name = $nama;
    }

    function ambil_name(){
        return $this->name;
    }
    
    function simpan_color($warna){
        $this->color = $warna;
    }

    function ambil_color(){
        return $this->color;
    }
}

$apple = new Fruit();
$apple->simpan_name('Apple');
$apple->simpan_color('Red');
echo "Name Buah: " . $apple->ambil_name();
echo "<br>";
echo "Color Buah: " . $apple->ambil_color();
?>
