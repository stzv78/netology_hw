<!--                                       Домашнее задание №1.3 Котюков Евгений                                       -->

<?php
$array_continents =  [          // Массив с животными
    'Eurasia' => ['Neotragus pygmaeus','Ovis','Canis lupus','Vombatus hirsutus','Lutra'],
    'North America' => ['Perameles nasuta','Desmana moschata','Gazella','Lepus timidus','Sus scrofa'],
    'South America' => ['Bison','Castor canadensis','Lama','Procyon','Delphinus delphis'],
    'Africa' => ['Addax nasomaculatus','Papio cynocephalus','Syncerus caffer','Bos','Osphranter'],
    'Australia' => ['Camelus dromaderius','Antilocapra americana','Galago','Mustela erminea','Tachyglossus aculeatus'],
    'Antarctica' => ['Damaliscus dorcas','Hyaena','Equus zebra','Canis dingo','Dugong dugong']
];

$array_animals_now_2 = [];  // Массив животными которые имеют в имени два слова. Имя животного разбит на массив из двух слов.
$id_value_animals_now_2 = 0;

foreach($array_continents as $continent => $array_animals) {

    foreach($array_animals as $animal) {
        $number_of_words = str_word_count($animal);
        if ($number_of_words === 2) {
            $animal_value = (str_word_count($animal, 1));
            $array_animals_now_2 [$continent]['animal_'.$id_value_animals_now_2] = $animal_value; 
            ++$id_value_animals_now_2;
        };
    };
    $id_value_animals_now_2 = 0;
};

$array_animals_finish = []; // Массив с именами вымышленных животных
$id_value_animals_finish = 0;
$random_continent = ['Eurasia','North America','South America','Africa','Australia','Antarctica'];

foreach($array_animals_now_2 as $continent => $animal) {

    foreach($animal as $names => $name) {
        $random_continent_number = rand(0, 5);
        $random_continent_result = count($array_animals_now_2[$random_continent[$random_continent_number]]);                                                               
        $random_animal = rand(0, $random_continent_result-1);                                               
        $animal_name_random = $array_animals_now_2[$random_continent[$random_continent_number]]['animal_'.$random_animal][1];
        $finish_animal_name = $name[0] .' ' .$animal_name_random;
        $array_animals_finish [$continent]['animal_'.$id_value_animals_finish] = $finish_animal_name;
        ++$id_value_animals_finish;  
    };
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <title>Домашнее задание №1.3</title>
</head>
<body>
    <div>
        <h2>Настоящие животные</h2><br />
<?php 
$number_1 = 0;
foreach($array_continents as $continent => $array_animals) {
    echo '<h2>'.$continent.'</h2>';
    echo '<p>';
    foreach($array_animals as $animal) {
        echo $animal;
        ++$number_1;
        if ($number_1 === count($array_animals)) {
            echo '.';
        } else {
            echo ', ';
        };
    };
    $number_1 = 0;
    echo '</p>';
};                    
?>
    </div>

    <div>
        <h2>Вымышленные животные</h2><br />
<?php 
foreach($array_animals_finish as $continent => $array_animals) {
    echo '<h2>'.$continent.'</h2>';
    echo '<p>';
    foreach($array_animals as $animal) {
        echo $animal;
        ++$number_1;
        if ($number_1 === count($array_animals)) {
            echo '.';
        } else {
            echo ', ';
        };
    };
    $number_1 = 0;
    echo '</p>';
};  
?>
    </div>
</body>
</html>