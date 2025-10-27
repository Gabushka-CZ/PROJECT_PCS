<?php

// 1
    $name = "Gabriela";
    $vek = 35;
    $height = 1.67;

    echo "$name . $vek . $height";
   
//2
    $firstName = "Gabriela";
    $lastName = "Veselíková";

    $fullName = $firstName ." ". $lastName;

    echo $fullName;

//3
    $x = 3.14;

    gettype($x);

//4
    $number = (int) "42";
    
    $sum = $number + 8;

    echo $sum;

//5

    $pole = ["red", "green", "blue"];
    echo $pole[1];

 //6
    $score = 75;

    if ($score > 90) {
        echo "Výborně";
    } elseif ($score>60 && $score<89) {
        echo "Dobře";
    } else {
        echo "Zkus to znovu";
    } 
    
//7
    $x = 15;
    if ($x % 2 == 0) {
        echo "Číslo je sudé";
    } else {
        echo "Číslo je liché";
    }

//8 
    $name = "Gabriela";
    if (str_starts_with($name, "A")) {
        echo "Jméno začíná A";
    } else {
        echo "Jméno nezačíná A";
    }

//9

    $loggedIn = false;
    if ($loggedIn === true) {
        echo "Přihlášen";
    } else {
        echo "Odhlášen";
    }

//10
    $items = ["auto"];
    if (empty($items)) {
        echo "Žádné položky";
    } else {
        echo "Pole obsahuje polozky";
    }

//11
    function greet($name) {
        return "Ahoj " . $name;
    }

    echo greet("Gabriela");

//12

    function add($a, $b) {
        return $a + $b;
    } 
    
    echo add(1, 2);

//13
    function isEven($number) {
        return $number % 2 == 0;
    }
    

//14

    $array = [10,15,20];

    function average($numbers) {
        return array_sum($numbers) / count($numbers);
    }
  
    echo average($array);

//15
    function countVowels($string) {
    $string = strtolower($string);
    $vowels = ['a', 'e', 'i', 'o', 'u', 'á', 'é', 'í', 'ó', 'ú', 'y', 'ý'];
    }

//16
    $text = "Ahoj";
    echo strrev($text);

//17

    $word = "php";
    $word = ucfirst($word);

    echo $word;

//18
    $sentence = "Dnes je krasny den, že ano?";
    $count = substr_count(($sentence), "a");

    echo  $count;

//19 
    if (str_contains(($sentence), "laravel")) {
        echo "Věta obsahuje slovo 'laravel'.";  
    } else {echo "Věta neobsahuje slovo 'laravel'.";
}

//20
    $NewSentence= str_ireplace("e", "3", $sentence);

    echo  $NewSentence;

 //21
    $numbers = [1, 2, 3, 4, 5];
    $doubleNumbers = array_map(function($num) {
        return $num * 2;
    }, $numbers);

 

//22

    $names = ['Eva', 'Jan', 'Eva', 'Petr'];
    $uniqueNames = array_unique($names);



    //23
    $a = [1, 2];
    $b = [3, 4];
    $mergingAB= array_merge($a, $b);
    print_r($mergingAB);
//24
   
    if (in_array("Jan", $names)){
        echo "Jan se je v poli.";
     } else {
        echo "Jan se není v poli.";
    }


//25
    $numbers = [9, 2, 5, 1];
    sort($numbers);
   

//26
    function findLongestWord($words) {
    $longest = '';
    foreach ($words as $word) {
        if (strlen($word) > strlen($longest)) {
            $longest = $word;
        }
    }
        return $longest;
    }
    
    echo findLongestWord(['aaaaaaaaaaaaaaaaa','bbbbbbbbbbbb','cccccccccccc']);

//27

    function sumEvenNumbers($numbers) {
        $even = array_filter($numbers, fn($n) => $n % 2 === 0);
        return array_sum($even);
    }
    
    

//28
    function reverseWords($sentence) {
        $words = explode(' ', $sentence);
        $reversed = array_reverse($words);
        return implode(' ', $reversed);
    }

    

//29

    function hasDuplicates($array) {
        $unique = array_unique($array);
        return count($array) != count($unique);
    }

    
        
 
//30
    function uniqueLetters($string) {
        $letters = str_split(str_replace(' ', '', strtolower($string)));
        return array_values(array_unique($letters));
    }
    
    

?>