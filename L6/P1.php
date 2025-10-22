<!DOCTYPE html>
<html>
<body>
<?php
$gun = array('z' => "Pazartesi",
             'b' => "Salı",
             'Çarşamba', 'c' => "Perşembe", "Cuma");

//var_dump($gun);
print_r($gun);

$ders = array('Pazartesi' => "Mobil"
             ,'Salı' => ["Nesne", "Görsel"]
             ,'Çarşamba' => "Web3"
             ,'Perşembe' => ["Seç1", "Seç2"]
             ,'Cuma' => ["Nesne", "Seç3"]);

echo $ders["Pazartesi"];


$dersNotlari = [
    "Mobil" => ["vize" => 70, "final" => 85],
    "Nesne" => ["vize" => 50, "final" => 60],
    "İleri Web" => ["vize" => 30, "final" => 60]
];

echo "<br><br>Ders Notları Sonuçları:";

foreach($dersNotlari as $dersAdi => $notlar){
    $vizeNotu = $notlar["vize"];
    $finalNotu = $notlar["final"];

    $sonuc = ($vizeNotu * 0.40) + ($finalNotu * 0.60);

    echo ("<br>Ders:$dersAdi<br>");
    echo ("Vize Notu:$vizeNotu<br>");
    echo ("Final Notu:$finalNotu<br>");
    echo ("Sonuç:$sonuc<br>");
}
?>

</body>
</html>