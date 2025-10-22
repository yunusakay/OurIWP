<html>

<head>
    <meta http-equiv="refresh" content="5">
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
$letter = "FF";
$color = "red";

if($letter=="FF")
    $color="red";
else if(($letter == "DD")||($letter == "DC"))
    $color="orange";
else{

}
echo "<font face= 'Times New Romans' size = '5'
 color = '".$color."'>".$letter."</font>";
echo "<hr/>"; 
$point = 88;
$visa=15;
$hW=0;
$final=75;
$point=$visa*0.3+$hW*0.2+$final*0.5;
print($point);

switch($point){
    case $point >90:
        $letter= 'AA';
        break;
    case$point>85:
        $letter= 'BA';
        break;
    case$point>80:
        $letter= 'BB';
        break;
    case$point>75:
        $letter= 'CB';
        break;
    case$point>70:
        $letter= 'CC';
        break;
    case$point>65:
        $letter= 'DC';
        break;
    case$point>60:
        $letter= 'DD';
        break;
    case$point>50:
        $letter= 'FD';
        break;
}

echo "notunuz : <font face= 'Times New Romans' size = '5'
 color = '",$color."'>".$letter."</font>";
$a=5;$b=6;$c=7;
echo $a,$b,$c,'<br/>';
$d=++$a-$b+++-$c;
echo $d,'<br/>';
echo $a,$b,$c,'<br/>';

$lessons=array("Mobile","Object","Visual2","PHP", "Chose1","Chose2","Object2","Chose3");
echo "<hr/>";
foreach ($lessons as$value) {
    echo $value,'<br/>';
}
?>
<h1>Yunus</h1>
Test 1
</body>
</html>