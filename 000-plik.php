<?php

require 'errors.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>to jest tutuł</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        
    </head>
        
    <body>
        <!--
         podgląd plików w katalogu serwera
         htaccess tam jest zapis option idexes moza to wyłaczyć aby widzieć nazwy plików
        -->
        
        
        <a href="http://localhost:8888/000-plik.php?strona=1">strona 1</a>
        <a href="http://localhost:8888/000-plik.php?strona=2">strona 2</a>
        <a href="http://localhost:8888/000-plik.php?strona=3">strona 3</a>
         <?php
        /*
         $strona = 1;
         echo "<br>";   
         
         if ($strona == 11){
             echo "strona 1";
         }
         if ($strona ==2){
             echo "strona 2";
         }
         
         if ($strona ==3){
             echo "strona 3";
         }
         else {
             echo "to nie jest zadna strona";
         }
         
         */
         //$_GET;
         //print_r($_GET);
         
         //wprowadznie w url
         //?cos  -
         //?imie=michu - powstaje tablica asocjacyna o indeksie imie i wartosci michu
         //kilka parametow 
         ///000-plik.php?imie=imbir&imie2=michu
         
         
         //odwolanie to wartosci tablicy poprzez klucz - czyli strowanie stronami
         ///000-plik.php?strona=1
        
         /*
         
         if ($_GET['strona']==1){
             echo "strona numer 1";
         }
         */
         
         //lepsza praktyka
         echo "<br>";
         
         //$strona = $_GET['strona'];
         
         //co jesli nie ma podaje wartosci dla tablicy GET?
         //jak to obsłużyc
         
         

         if(!empty($_GET)){//to jest prawdłowe  isset - dlaczego nie działa to
             $strona = $_GET['strona'];//sprawdzić w pomocy
         
         if ($strona==1){
             echo 'storona nr 1 <br>';
         }
         if ($strona==2){
             echo 'strona nr 2 <br>';
         }
         if ($strona==3){
             echo 'strona nr 3 <br>';
         }
         else {//jak obłsuzyć wpisanie czegoś innego poza 1,2,3
             echo 'inna strona';
         }

        }
        
         //echo "<hr>";

         //die($strona);

         
        //teraz href u goru kody  
         
         
         //teraz instukcja switch

         echo "<br>";


 /*

        if (!empty($_GET)){

            $strona=$_GET['strona'];

            switch ($strona) {
                case 1:
                    echo "strona 1";
                    break;
                case 2:
                    echo "strona 2";
                    break;
                case 3:
                    echo "strona 3";
                    break;
                default:
                echo "co za strona";

            }

            }
        
*/



         
         
         
         
         
         
         
        
         
         
         ?>
       
            


    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</html>













