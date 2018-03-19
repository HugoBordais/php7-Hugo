<?php

$captain = [
    'age' => 23,
    'name' => 'Jacques Spareau',
    'isDead' => 'true',
    'famousLastWords' => 'AAaaargh...',
];

if($captain['isDead'] == true)
{
print("Le capitaine ".$captain['name']." est mort à l'age de ".$captain['age']."ans.\n");
print("Ses derniers mots étaient ".$captain['famousLastWords']);
}

?>
