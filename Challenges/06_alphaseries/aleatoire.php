<?php
    require_once(__DIR__.'/src/code.php');
    $slug = randomSerie()['slug'];

    header('Location: /php7-Hugo/Challenges/06_alphaseries/serie.php?slug='.$slug);
 ?>
