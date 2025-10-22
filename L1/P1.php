<html>

<head>
    <title></title>
</head>

<body>

Kırklareli Üniversitesi <br/>
Teknik Bİlimyler MYO<br/>
<?php
$a =5;
$b ="Osman";
$c = 0.85;
$d = $a+$c;
echo "<hr/>";
echo $a, " " , $c; 
echo "<hr/>";
echo $b;
$harf = "FF";
$renk = "red";

if($harf=="FF")
    $renk="red";
else if(($harf == "DD")||($harf == "DC"))
    $renk="orange";
else{

}
echo "<font face= 'Times New Romans' size = '5'
 color = '".$renk."'>".$harf."</font>";


echo "<hr/>"; 
$not1 = 88;

if ($not1 >= 90) {
    $harf1 = "AA";
    $renk1 = "green";
} elseif ($not1 >= 85) {
    $harf1 = "BA";
    $renk1 = "green";
} elseif ($not1 >= 80) {
    $harf1 = "BB";
    $renk1 = "orange";
} elseif ($not1 >= 75) {
    $harf1 = "CB";
    $renk1 = "orange";
} elseif ($not1 >= 70) {
    $harf1 = "CC";
} elseif ($not1 >= 65) {
    $harf1 = "DC";
    $renk1 = "brown";
} elseif ($not1 >= 60) {
    $harf1 = "DD";
    $renk1 = "brown";
} elseif ($not1 >= 50) {
    $harf1 = "FD";
    $renk1 = "red";
} else {
    $harf1 = "FF";
    $renk1 = "red";
}


echo "notunuz : <font face= 'Times New Romans' size = '5'
 color = '".$renk1."'>".$harf1."</font>";

?>
<h1>Osman</h1>
</body>

</html>