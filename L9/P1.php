<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <form>
        <input type="text" name="a1" value="4">
        <input type="text" name="a2" value="6">
        <button type="submi">Click</button>
    </form>
    <?php
    function random_array($dimension=10, $random=1000){
        for($i=0; $i<$dimension;$i++){
            $make_array[]=rand(1,$random);
        }
        return $make_array;
    }
    function printArray($object){
        echo"<hr/>";
        foreach ($object as $value){
            echo "$value <br/>";}
            echo " Summon of the numbers from up there: ".mean_array($object);
    }   
    function mean_array($array){
        $summon=0;$mean=-.0;
        foreach($array as $v){ $summon+=$v;}
            $mean=$summon/sizeof($array);
            return $mean;
    }
    $array=random_array();
    $array1=random_array(15,200);
    printArray($array);
    printArray($array1);     
?>
</body>
</html>