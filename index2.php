<?php
class Hewan{
    public $name;
    public $gerak;

    function set_name($nama){
        $this->name = $nama;
    }

    function get_name(){
        return $this->name;
    }
    function set_gerak($gerak){
        $this->gerak = $gerak;
    }
    function get_gerak(){
        return $this->gerak;
    }
}
$burung = new Hewan();
$burung->set_name('burung');
$burung->set_gerak('terbang');

echo "Name Hewan:" . $burung->get_name();
echo "<br>";
echo "Bergerak Secara:" .$burung->get_gerak();
echo "<br>";


$harimau = new Hewan();
$harimau->set_name('harimau');
$harimau->set_gerak('berlari');

echo "Name Hewan:" . $harimau->get_name();
echo "<br>";
echo "Bergerak Secara:" .$harimau->get_gerak();
echo "<br>";

$ikan = new Hewan();
$ikan->set_name('ikan');
$ikan->set_gerak('berenang');

echo "Name Hewan:" . $ikan->get_name();
echo "<br>";
echo "Bergerak Secara:" .$ikan->get_gerak();
echo "<br>";

$monyet = new Hewan();
$monyet->set_name('monyet');
$monyet->set_gerak('bergantung');

echo "Name Hewan:" . $monyet->get_name();
echo "<br>";
echo "Bergerak Secara:" .$monyet->get_gerak();
echo "<br>";



$ular = new Hewan();
$ular->set_name('ular');
$ular->set_gerak('melingkar');

echo "Name Hewan:" . $ular->get_name();
echo "<br>";
echo "Bergerak Secara:" .$ular->get_gerak();

?>