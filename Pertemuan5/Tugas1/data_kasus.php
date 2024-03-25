<?php
require_once 'class_hewan.php';

$kupu_kupu1 = new Kupu_kupu("Sitrun", "Hijau", "dataran tinggi", 150000);
$kupu_kupu2 = new Kupu_kupu("Aglais Urticae", "Unggu Orange", "dataran tinggi", 200000);
$anjing1 = new Anjing("Tomi", "Pudel", 1000000);
$anjing2 = new Anjing("Bendy", "Maltipoo", 25000000);

echo 'Kupu-kupu yang cocok dikoleksi <br>';
$kupu_kupu1->getInfoHewan();
echo '<br>';
$kupu_kupu2->getInfoHewan();
echo '<br><br>';

echo 'Anjing yang cocok dipelihara <br>';
$anjing1->getInfoHewan();
echo '<br>';
$anjing2->getInfoHewan();
echo '<br><br>';
?>
