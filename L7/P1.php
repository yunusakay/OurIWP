<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $provinces = array('Adana', 'Adıyaman', 'Afyon', 'Ağrı', 'Amasya', 'Ankara', 'Antalya', 'Artvin',
    'Aydın', 'Balıkesir', 'Bilecik', 'Bingöl', 'Bitlis', 'Bolu', 'Burdur', 'Bursa', 'Çanakkale',
    'Çankırı', 'Çorum', 'Denizli', 'Diyarbakır', 'Edirne', 'Elazığ', 'Erzincan', 'Erzurum', 'Eskişehir',
    'Gaziantep', 'Giresun', 'Gümüşhane', 'Hakkari', 'Hatay', 'Isparta', 'Mersin', 'İstanbul', 'İzmir', 
    'Kars', 'Kastamonu', 'Kayseri', 'Kırklareli', 'Kırşehir', 'Kocaeli', 'Konya', 'Kütahya', 'Malatya', 
    'Manisa', 'Kahramanmaraş', 'Mardin', 'Muğla', 'Muş', 'Nevşehir', 'Niğde', 'Ordu', 'Rize', 'Sakarya',
    'Samsun', 'Siirt', 'Sinop', 'Sivas', 'Tekirdağ', 'Tokat', 'Trabzon', 'Tunceli', 'Şanlıurfa', 'Uşak',
    'Van', 'Yozgat', 'Zonguldak', 'Aksaray', 'Bayburt', 'Karaman', 'Kırıkkale', 'Batman', 'Şırnak',
    'Bartın', 'Ardahan', 'Iğdır', 'Yalova', 'Karabük', 'Kilis', 'Osmaniye', 'Düzce');
    $days = array("Pazartesi", "Salı", "Çarşamba", "Perşembe", "Cuma", "Cumartesi", "Pazar");
    $trip = array("09.00", "12.00", "20.00", rand(10,24));

    function selectMenu ($option){
        echo "<select>";
        foreach($option as $chooses){
            echo "<option>".$chooses."</option>";
        }
        echo "</select>";
    }

    selectMenu($provinces);
    selectMenu($days);
    selectMenu($trip);

    function returnArray($count, $min, $max){
        $randomArray = [];
        for ($i = 0; $i < $count; $i++) {
            $randomArray[] = rand($min, $max);
        }
        return $randomArray;
    }

    $array1 = returnArray(40, 50, 200);
    print_r($array1); // This should print the random array

    function sumArray($array){
        $sum = array_sum($array);
        $average = $sum / count($array);
        sort($array);
        $count = count($array);
        
        // Median calculation
        if($count % 2 == 0) {
            $median = ($array[$count / 2 - 1] + $array[$count / 2]) / 2;
        } else {
            $median = $array[floor($count / 2)];
        }
        
        // Mode calculation
        $mode = array_count_values($array);
        arsort($mode);
        $mode = array_key_first($mode);
        
        // Standard deviation
        $standardDeviation = sqrt(array_sum(array_map(function($x) use ($average) {
            return pow($x - $average, 2);
        }, $array)) / count($array));
        
        return array(
            "Sum" => $sum,
            "Average" => $average,
            "Median" => $median,
            "Mode" => $mode,
            "Standard Deviation" => $standardDeviation
        );
    }

    $statistics = sumArray($array1);
    print_r($statistics); // This will print the calculated statistics

    ?>
</body>
</html>
