<html>
    <head>
        <style>
            body{
                background-color: orange;
            }
            table{
                background-color: gray;
                margin: auto;
            }
            table:hover{
                background-color: green;
            }
            a{
                text-decoration: none;
            }
            a:hover{
                background-color: green;
            }
        </style>
    </head>
    <body>
        <?php
            require("connect.php");
            echo("jestem w pliku insert.php<br>");
            echo ("<li>przesłany text: ".$_POST["imie"]);
            echo ("<li>przesłany text: ".$_POST["liczba"]);
            echo ("<li>przesłany text: ".$_POST["plec"]);

            $sql = "INSERT INTO autorzy (id_autorzy, imie) VALUES (null,'" .$_POST['imie']. "')";
            $sql2 = "SELECT * FROM pracownicy WHERE zarobki<".$_POST['liczba']. " AND imie ".$_POST['plec']. "LIKE '%a'";       
            echo ("</li>".$sql);
            echo ("</li>".$sql2);

            mysqli_query($conn, $sql);
            $result = mysqli_query($conn, $sql2);

            echo("<table border=1 class='tabelka'");
            echo("<tr><td>Imie</td><td>Zarobki</td></tr>");
            while($row = mysqli_fetch_assoc($result)){
                echo("<tr>");
                echo("<td>".$row['imie']."</td><td>".$row['zarobki']."</td>");
                echo("</tr>");
            }
            echo("</table>");
        ?>
        <br/>
        <a href='index.html'><=Powrót</a>
    </body>
</html>
