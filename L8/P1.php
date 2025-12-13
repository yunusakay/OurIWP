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
    $number1=0;$number2=0;
    if(isset($_GET['a1'])){$number1=$_GET['a1'];}
    if(isset($_GET['a2'])){$number2=$_GET['a2'];}
    ?>
    <table border=3 width="90%">
        <?php
        for($i=0;$i<$number1;$i++){
            echo "<tr align='center'>";
            for($j=0;$j<$number2;$j++){
                if($j==($i-5)||$j==($i+5)){
                    echo "<td>*</td>";
                }else{
                    echo "<td>-</td>";
                }
            }
            echo "</tr>";
        }
        ?>
</body>
</html>