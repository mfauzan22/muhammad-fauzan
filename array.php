<?php
// $arraybuah = ['apple', 'orange', 'grape'];
$arraybuah[0] = 'appel';
$arraybuah[1] = 'orange';
$arraybuah[2] = 'grape';
$arraybuah[3] = 'banana';
$arraybuah[4] = 'semangka';
$arraybuah[5] = 'durian';
$arraybuah[6] = 'rambutan';
//array numerik -> inidex angka
$jmldata = count($arraybuah);
echo "<select>";
for ($i=0; $i < $jmldata; $i++){
    echo  "<option>". $arraybuah [$i]."</option>";
}
echo "</select>"."<br>";

$arrayDc = [
    
    
]

//array assosiatif -> index huruf
$arrayavenger = [
    [
        "name" => "Iron Man",
        "age" => 45,
        "color" => "red",

    ],
    [
        "name" => "Capt America",
        "age" => 100,
        "color" => "red-blue",

    ],
    [
        "name" => "Hulk",
        "age" => 89,
        "color" => "green",

    ],
    
];
foreach ($arrayavenger as $data){
    echo "name : ".$data['name']."<br>";
    echo "age : ".$data['age']."<br>";
    echo "color : ".$data['color']."<br>";


    
}
?>
