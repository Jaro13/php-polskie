<?php

//przechwycenie wartosci poprzez metodę http Post
//wartosci znajdują sie w tablicy Post



$tablica_post=$_POST;

print_r($tablica_post);//prawy wyswietl źródło strony lepiej to wyglada
echo "<br>";
echo "<br>";
echo "<br>";

//drukowanie indeksów tablicy post
foreach ($tablica_post as $key => $value) {
    print $key.'<br>';
}

echo "<br>";

//teraz drukowanie vartości

foreach ($tablica_post as $key => $value) {
    print $value.'<br>';
}

//teraz połaczenie klucza/indexu oraz wartosci
echo "<br>";

foreach ($tablica_post as $key => $value) {
    print 'para klucz/index - wartość tablicy: '.$key.' ->' .$value.'<br>';
}

echo "<br>";


//jak srpawdzić czy coś jest w tablicy get w url

//uwaga tablic post powstaje poprzez przekaznie danych z innego pliku poprzez meotde post
//tablica geg - url tego samego pliku
$tablica_get = $_GET;
print_r($tablica_get);

//tablie

$moja_tablica=[];

$moja_tablica[]='element 1';
$moja_tablica[]='element 2';
$moja_tablica[]='element 3';
$moja_tablica[]='element 4';


print_r($moja_tablica);

echo "<br>";
//echo $moja_tablica[1];

