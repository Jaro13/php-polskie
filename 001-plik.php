<?php
//wyswietlanie bledow
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
ini_set('error_log',dirname(__FILE__).'/php-error.txt');
//gdzie jest eduweb pdo - error log - zapisywanie daty wystąpienia błedu w logu?
//formularze html. post zapisywanie danych

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

        <form action="001-post.php" method="post">
            <!-- mozna zmieć tutaj metodę na post i get jakie skutki -->
            <!-- na koniec zastosowac elementy bootstrapa -->
            Proszę o podanie imienia<input type="text" value="" name="imie"/><br>
            Proszę o podanie hasła<input type="password" value="" name="pass"/><br>
           
            
           Wybierz płeć
            <select name="plec">
                <option value="1">facet</option>
                <option value="2">kobieta</option>
            </select><br>
           
           Opis
           <textarea name="opis">
               
           </textarea><br><br>
           
           <input type="submit" value="ok" /><br>
        </form>
            


    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</html>













