<?php
// $score = 80;

// if ($score >= 90){
//     echo "Grade: A";
// }elseif($score >= 80 && $score <= 89){
//     echo "Grade: B";
// }elseif($score >= 70 && $score <= 79){
//     echo "Grade: C";
// }else{
//     "Grade: F";
// }


// $student = [
//     [//$x
//         'name' => 'Alice', //$y => $z
//         'Grade' => 'A',
//     ],
//     [
//         'name' => 'Bob',
//         'Grade' => 'B',
//     ],
//     [
//         'name' => 'Raju',
//         'Grade' => 'C',
//     ],
// ];

// foreach ($student as $x) {
//     foreach ($x as $y => $z) {
//         echo "$y: $z<br>";
//     }
// }


$listOfBook = array(
    array("Kembara Mamat","Mamat","2001"),
    array("Jurnal Saleh","Saleh","2002"),
    array("Ekspedisi Kicap","Kicap","2003"),
);
echo "List Of Book<br><br>";
echo "Tittle : ".$listOfBook[0][0]."<br>Author : ".$listOfBook[0][1]."<br>Year : ".$listOfBook[0][2]."<br><br>";
echo "Tittle : ".$listOfBook[1][0]."<br>Author : ".$listOfBook[1][1]."<br>Year : ".$listOfBook[1][2]."<br><br>";
echo "Tittle : ".$listOfBook[2][0]."<br>Author : ".$listOfBook[2][1]."<br>Year : ".$listOfBook[2][2]."<br><br>";
?>