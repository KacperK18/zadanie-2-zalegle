<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lista Klubów</title>
</head>
<body>
    <div class="baner">
        Baza danych Klubów    
        
        </div>
    
    <div class="obramka">
        <div class="panel-lewy">
            <h2>Kluby</h2>
                <?php
                $conn=mysqli_connect('localhost','root','','football');
                if(!$conn)
                {
                exit("Błąd połączenia z serwerem");
                }
                else{
                $pyt=mysqli_query($conn,'select nazwa, opis, region from ligi;');
                 $il_wierszy=mysqli_num_rows($pyt);
                 echo"<table><tr><th>Nazwa</th><th>Opis</th><th>Region</th>";
         
                
                 for($i=0;$i<$il_wierszy;$i++){
                    $result=mysqli_fetch_array($pyt);

                    echo"<tr><td>".$result['nazwa']."</td><td>".$result['opis']."</td><td>".$result['region']."</td></tr>";
                 }
                 echo"</table>";
                }mysqli_close($conn);
                ?>
            
    
    
        </div>
    
    </div>
        <footer>
        <a href="../index.html">Powrót do strony głównej</a></br>
        <a href="../dodanie/dodanie.html">Dodaj klub</a>
        </footer>
    
</body>
</html>