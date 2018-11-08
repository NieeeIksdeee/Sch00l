<html>
<head>
    <link href="test.css" rel="stylesheet"/>
    <meta charset="UTF-8">
</head>
<body>
    <div class="site">
        <div class="header">
        </div>
        <div class="main">
            <div class="a">
            </div>
            <div class="b">
                <?php
                    require("connect.php");
                    
                    $sql = "SELECT year(curdate())-year('".$_POST["date"]."') as lat";
                    $result = mysqli_query($conn, $sql);
                    $cal = mysqli_fetch_assoc($result);
                    $sql2 = "SELECT (year(curdate())-year('".$_POST["date"]."'))*12 as miesiace";
                    $result2 = mysqli_query($conn, $sql2);
                    $cal2 = mysqli_fetch_assoc($result2);
                    $sql3 = "SELECT (to_days(curdate())-to_days('".$_POST["date"]."')) as dni";
                    $result3 = mysqli_query($conn, $sql3);
                    $cal3 = mysqli_fetch_assoc($result3);
                    $sql4 = "SELECT (to_days(curdate())-to_days('".$_POST["date"]."'))*24 as h";
                    $result4 = mysqli_query($conn, $sql4);
                    $cal4 = mysqli_fetch_assoc($result4);
                    $sql5 = "SELECT (to_days(curdate())-to_days('".$_POST["date"]."'))*24*60 as m";
                    $result5 = mysqli_query($conn, $sql5);
                    $cal5 = mysqli_fetch_assoc($result5);
                    $sql6 = "SELECT (to_days(curdate())-to_days('".$_POST["date"]."'))*24*60*60 as s";
                    $result6 = mysqli_query($conn, $sql6);
                    $cal6 = mysqli_fetch_assoc($result6);
                    

                    echo("<h1>Zadanie 1</h1>"."<br/>");
                    echo("Podana data: ".$_POST["date"]."<br/>");
                    echo("Zapytanie: ".$sql."<br/>");
                    echo("Masz lat: ".$cal['lat']."<br/>");
                    echo("Masz miesięcy: ".$cal2['miesiace']."<br/>");
                    echo("Masz dni: ".$cal3['dni']."<br/>");
                    echo("Masz godzin: ".$cal4['h']."<br/>");
                    echo("Masz minut: ".$cal5['m']."<br/>");
                    echo("Masz sekund: ".$cal6['s']."<br/>");
                ?>
            </div>
            <div class="c">
                <form  class="form" action="" method="POST">
                    <input type="date" name="date">
                    <input type="submit" value="Wyślij">
                </form>
            </div>
        </div>
        <div class="footer">
        </div>
    </div>  
</body>
</html>

