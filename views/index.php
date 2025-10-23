<?php
//1
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
    $number = "42";
    $number_int = (int) $number;
    $soucet = $number_int + 8;

    echo $soucet;

    $pole = ["red", "green", "blue"];
    echo $pole[1];

 //6
    $score = 75;

    if ($score > 90) {
    echo "Výborně";
    } elseif ($score >= 60 && $score <= 89) {
    echo "Dobře";
    } else {
    echo "Zkus to znovu";
    } 
    
//7
    $x = 10;
    if ($x % 2 == 0) {
    echo "Číslo je sudé";
    } else {
    echo "Číslo je liché";
    }

//8 
    $name = "Gabriela";
    if (($name[0]) === "a") {
    echo "Řetězec začíná písmenem 'a'";
    } else {
    echo "Řetězec nezačíná písmenem 'a'";
    }

//9

    $loggedIn = false;

    echo $loggedIn ? "Přihlášen" : "Odhlášen";

//10
    $items = ["auto"];

    if (empty($items)) {
    echo "Žádné položky";
    } else {
    echo "Pole obsahuje prvky";
    }
//11
    function greet($name) {
    return "Ahoj " . $name . "!";
    }

    echo greet("Gabriela");
//12

    function add($a, $b) {
    return $a + $b;
    }echo add(1, 2);

//13
    function isEven($number) {
    return $number % 2 == 0;
    }
    echo isEven(6) ? "Sudé" : "Liché";

//14
    function average($numbers) {
    if (count($numbers) == 0) return 0;
    return array_sum($numbers) / count($numbers);
    }
    $numbers = [0, 2, 35, 3];
    echo average($numbers); 
//15
   //  function countVowels($string) {
    //$string = strtolower($string);
    //$vowels = ['a', 'e', 'i', 'o', 'u', 'á', 'é', 'í', 'ó', 'ú', 'y', 'ý'];

//16
    $text = "Ahoj světe";
    echo strrev($text);

//17
    $word = "php";
    $word = ucfirst($word);

    echo $word;
//18
    $sentence = "Dnes je krasny den, že ano?";
    $count = substr_count(strtolower($sentence), "a");

    echo " 'a' je ve větě  " . $count;
//19 
    if (str_contains(strtolower($sentence), "laravel")) {
    echo "Věta obsahuje slovo 'Laravel'.";  
    } else {echo "Věta neobsahuje slovo 'Laravel'.";
}

//20
    $updated = str_replace("e", "3", $sentence);

    echo $updated;

 //21
    $numbers = [1, 2, 3, 4, 5];
    $doubleNumbers = array_map(function($num) {
    return $num * 2;
    }, $numbers);

    print_r($doubleNumbers);

    //22

    $names = ['Eva', 'Jan', 'Eva', 'Petr'];
    $uniqueNames = array_unique($names);
    print_r($uniqueNames);


    //23
    $a = [1, 2];
    $b = [3, 4];
    $mergedarray = array_merge($a, $b);
    print_r($mergedarray);

    //24
    $found = in_array('Jan', $names);
    echo $found ? "'Jan' se nachází.\n" : "'Jan' se nenachází.\n";

    //25
    $numbers = [9, 2, 5, 1];
    sort($numbers);
    print_r($numbers);

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
    echo findLongestWord(['kočka', 'slon', 'tygr', 'hroch']) . "\n";

    //27

    function sumEvenNumbers($numbers) {
    $even = array_filter($numbers, fn($n) => $n % 2 === 0);
    return array_sum($even);
    }
    echo sumEvenNumbers([1, 2, 3, 4, 5, 6]) . "\n";

    //28
    function reverseWords($sentence) {
    $words = explode(' ', $sentence);
    $reversed = array_reverse($words);
    return implode(' ', $reversed);
    }
    echo reverseWords('Ahoj světe jak se máš') . "\n";

    //29

    function hasDuplicates($array) {
    return count($array) !== count(array_unique($array));
    }
    var_export(hasDuplicates([1, 2, 3, 3]));
    echo "\n";
 
        //30
    function uniqueLetters($string) {
    $letters = str_split(str_replace(' ', '', strtolower($string)));
    return array_values(array_unique($letters));
    }
    print_r(uniqueLetters('Ahoj Světe'));

?>