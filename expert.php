<?php
declare(strict_types=1);

// === Exercise 1 ===
echo "Exercise 1 starts here:";

function new_exercise($x) {

    $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
    echo $block;
}

new_exercise(2);
// === Exercise 2 ===

$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0];

echo $monday;

new_exercise(3);
// === Exercise 3 ===

$str = "Debugged ! Also very fun";
echo substr($str, 0, 10);

new_exercise(4);
// === Exercise 4 ===

foreach($week as &$day) {
    $day = substr($day, 0, strlen($day)-3);
}

print_r($week);

new_exercise(5);
// === Exercise 5 ===

$arr = [];

for ($letter = 'a'; $letter <= 'z'; $letter++) {
    array_push($arr, $letter);
    if ($letter == 'z'){
        break;
    }
}

print_r($arr); // Array ([0] => a, [1] => b, [2] => c, ...) a-z alfabetical array

new_exercise(6);
// === Exercise 6 ===

function randomHeroName()
{
    $hero_firstnames = ["captain", "doctor", "iron", "Hank", "ant", "Wasp", "the", "Hawk", "Spider", "Black", "Carol"];
    $hero_lastnames = ["America", "Strange", "man", "Pym", "girl", "hulk", "eye", "widow", "panther", "daredevil", "marvel"];
    $randname = [$hero_firstnames[array_rand($hero_firstnames)], $hero_lastnames[array_rand($hero_lastnames)]];
    print_r(implode("-",$randname));
}

echo "Here is the name: ";
randomHeroName();

new_exercise(7);
// === Exercise 7 ===

function copyright($year) {
    return "&copy; $year BeCode";
}
//print the copyright
echo copyright(date('Y'));

new_exercise(8);
// === Exercise 8 ===

function login(string $email, string $password) {
    if($email == 'john@example.be' || $password == 'pocahontas') {
        echo 'Welcome John';
        echo ' Smith';
    }
    echo 'No access';
}
//should great the user with his full name (John Smith)
$login = login('john@example', 'pocahontas');
//no access
$login = login('john@example', 'dfgidfgdfg');
//no access
$login = login('wrong@example', 'wrong');

new_exercise(9);
// === Exercise 9 ===

function isLinkValid(string $link) {
    $unacceptables = array('https:','.doc','.pdf', '.jpg', '.jpeg', '.gif', '.bmp', '.png');

    foreach ($unacceptables as $unacceptable) {
        if (strpos($link, $unacceptable) == true) {
            echo 'Unacceptable Found<br />';
        }
    }
    echo 'Acceptable<br />';
}
//invalid link
isLinkValid('http://www.google.com/hack.pdf');
//invalid link
isLinkValid('https://google.com');
//VALID link
isLinkValid('http://google.com');
//VALID link
isLinkValid('http://google.com/test.txt');

new_exercise(10);

//Filter the array $areTheseFruits to only contain valid fruits
//do not change the arrays itself
$areTheseFruits = ['apple', 'bear', 'beef', 'banana', 'cherry', 'tomato', 'car'];
$validFruits = ['apple', 'pear', 'banana', 'cherry', 'tomato'];

$areTheseFruits = array_intersect($areTheseFruits, $validFruits);

var_dump($areTheseFruits);//do not change this