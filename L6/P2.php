<!DOCTYPE html>
<html>
<body>
<?php
$gun = array('z' => "Pazartesi",
             'b' => "Salı",
             'Çarşamba', 'c' => "Perşembe", "Cuma");

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
    $notesList=array(
        array(//First Class
            1257008830=>array(60,75),
            1257008831=>array(83,60)
        ),
        array(//Second Class
            1257008833=>array(95,74),
            1257008834=>array(63,93)
        ),
        array(//Third Class
            1257008835=>array(50,45),
            1257008836=>array(30,50)
        )
        );
}
echo "<table border='1' width='100%'><tr>
        <th>Student no</th>
        <th>Midterm</th>
        <th>Final></th>
        <th>Gano</th> 
        </tr>";
        foreach($notesList as $classNo => $students){
            foreach($students as $student => $notes){
                if(($notes[0]+$notes[1])/2<50){$color="Red";}
                else if(($notes[0]+$notes[1])/2>50 and ($notes[0]+$notes[1])/2<70){$color="Orange";}
                else {$color="Green";}
                echo "<tr style='color:".$color.";'>
            <td>".$student."</td>
            <td>".$notes[0]."</td>
            <td>".$notes[1]."</td>
            <td>".(($notes[0]+$notes[1])/2)."</td>
            </tr>";
            }
        }
        echo "</table>";
?>

</body>
</html>