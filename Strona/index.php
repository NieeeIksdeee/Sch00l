<html>
    <head>
        <title>Test</title>
        <meta charset="UTF-8"/>   
        <link rel="stylesheet" href="style.css" type="text/css">           
    </head>
    <body>
        <div id="strona">
            <div class="gora" background="">
                <div class="h1">
                    <h1>Kalkulator</h1>
                </div>
                <form class="form" action="/test.php" method="POST">
                    <input type="number" name="a"><br>
                    <input type="number" name="b"><br>
                    <input type="radio" name="metoda" value="dodawanie" checked> +
                    <input type="radio" name="metoda" value="odejmowanie"> -
                    <input type="radio" name="metoda" value="mnozenie"> *
                    <input type="radio" name="metoda" value="dzielenie"> / |  <br>
                    <input type="submit" value="wyślij">
                </form>
            <?php
                echo('<h1>');
                echo("Kalkulator<br>");
                echo($_POST['a']);
                echo('<br>');
                echo($_POST['b']);
                echo('<br>');

                $liczba1 = $_POST['a'];
                $liczba2 = $_POST['b'];

                if ($_POST['metoda'] == "dodawanie"){
                    echo'Suma: '.($liczba1 + $liczba2);
                }
                else if($_POST['metoda'] == "odejmowanie"){
                    echo'Różnica: '.($liczba1 - $liczba2);
                }
                else if($_POST['metoda'] == "mnozenie"){
                    echo'Iloczyn: '.($liczba1 * $liczba2);
                }
                else if($_POST['metoda'] == "dzielenie"){
                    echo'Iloraz: '.($liczba1 / $liczba2);
                }
                echo('</h1>');
            ?>    
        </div>
    </body>
</html>
