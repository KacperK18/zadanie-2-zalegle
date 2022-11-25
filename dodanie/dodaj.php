<?php
$conn=mysqli_connect('localhost','root','','football');
            if(!$conn)
            {
            echo("Błąd połączenia z serwerem");
            }
            else{
            $nazwa=$_POST['nazwa'];
            $opis=$_POST['opis'];
            $region=$_POST['region'];
            $pytanko="insert into ligi (nazwa, popularnosc, opis, region)values('$nazwa','$opis','$region');";
            $pyt=mysqli_query($conn,$pytanko);
                $powrot="../index.html";
                $baza= "../odczyt/odczyt (2).php";
                
                echo '<a href="'.$powrot.'">Powrót do strony głównej</a></br>';
                echo '<a href="'.$baza.'">Baza klubów</a>';
            }
        
            mysqli_close($conn);
        
?>