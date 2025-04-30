<?php

function prosesHitung($angka1, $angka2, $operator) {
    if ($operator == "+") {
        return $angka1 + $angka2;
    } else if ($operator == "-") {
        return $angka1 - $angka2;
    } else if ($operator == "*") {
        return $angka1 * $angka2;
    } else if ($operator == "/") {
        if ($angka2 == 0) {
            return "tidak bisa di bagi nol!";
        } else {
            return $angka1 / $angka2;
        }
    } else {
        return false; 
    }
}

$inputData = [
    [20, 5, "+"],
    [15, 7, "-"],
    [6, 3, "*"],
    [9, 3, "/"]
];


foreach ($inputData as $baris) {
    $a = $baris[0];
    $b = $baris[1];
    $op = $baris[2];

    $hasil = prosesHitung($a, $b, $op);

    if ($hasil !== false) {
        echo "$a $op $b = $hasil<br>";
    }
}

?>
