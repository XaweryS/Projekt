<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Siatkówka</title>
</head>
<body>
<div class="pudelko">
        <h1>Wyniki Meczów</h1>
        <div id="pow">
            <a href="pilka.php">Piłka Nożna</a>
            <a href="siatkowka.php">Siatkówka</a>
            <a href="kosz.php">Koszykówka</a>
        </div>  
        <?php
            $urz = "root";
            $ho = "localhost";
            $haslo = "";
            $baza = "wyniki2";
            $pol=mysqli_connect($ho, $urz, $haslo, $baza);
            $kwe= "SELECT * FROM siatkowka";
            $res = mysqli_query($pol, $kwe);
            if(mysqli_num_rows($res) >0){
                while($wys = mysqli_fetch_assoc($res)){
                    echo "<div id='wyniki'> Druzyna 1: " . $wys['druzyna1'] . "</div>".
                        "<div id='wyniki'> Druzyna 2: " . $wys['druzyna2'] . "</div>".
                        "<div id='wyniki'> Wynik: " . $wys['wynik'] . "</div><br>";
                }
            }
            else{
                echo"błąd";
            }
            mysqli_close($pol);
        ?>
</div>
</body>
</html>