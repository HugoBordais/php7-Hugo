<?php

    $nb1 = 0;
    $nb2 = 0;
    $result = 0;
    $operator = [
        'plus' => '+',
        'moins' => '-',
        'multiple' => '*',
        'division' => '/',
    ];

    $nb1 = fsanf

    if($operator['plus']) {
        $result = $result + ($nb1 + $nb2);
        print($result);
    }
    if($operator['moins']) {
        $result = $result + ($nb1 - $nb2);
        print($result);
    }
    if($operator['multiple']) {
        $result = $result + ($nb1 * $nb2);
        print($result);
    }
    if($operator['division']) {
        $result = $result + ($nb1 / $nb2);
        print($result);
    }

     switch ($operator['division']) {
         case 0:
             print "Impossible de diviser par 0, veuillez renseigner un autre nombre.";
             break;

         default:
             print($operator);
             break;
     };

 ?>
