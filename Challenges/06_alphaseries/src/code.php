<?php

function randomSerie()
{
    $json = file_get_contents(__DIR__.'/../data/shows.json');
    $shows = json_decode($json, true);

$newArrey = array_keys($shows);
$randomIndex = rand(0, count($newArrey) - 1);
$showName = $newArrey[$randomIndex];
return $shows[$showName];
}

function getSerie()
{
    $json = file_get_contents(__DIR__.'/../data/shows.json');
    $shows = json_decode($json, true);
    
    $slug ='toto';
if (isset($_GET['slug'])) {
    $slug = $_GET['slug'];
}
$selectedShow=$shows[$slug];
return $selectedShow;
}
 ?>
