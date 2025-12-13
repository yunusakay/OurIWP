<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <form>
        <input type="text" name="a1" value="4">
        <input type="text" name="a2" value="6">
        <button type="submit">Click</button>
    </form>
    <?php
    $n1=0;$n2=0;
    $c1=0;$c2=0;
    $a1=array();$a2=array();
    if(isset($_GET['a1'])){$n1=$_GET['a1'];}
    if(isset($_GET['a2'])){$n2=$_GET['a2'];}
    for ($i = 0; $i <30; $i++){
        $rN=rand($n1,$n2);
        if($rN%2==1){
            if(count($a1)<=10){
                $a1[]=$rN;
            }
            $c1++;
        }else{
            if(count($a2)<=10){
                $a2[]=$rN;
            }
            $c2++;
        }
    }
    print_r($a1);
    echo"<br/><br/><br/>";
    print_r($a2);
    echo "<br/>".$c1;
    
    ?>
</body>
</html>