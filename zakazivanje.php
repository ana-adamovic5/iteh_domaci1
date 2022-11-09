<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aerial Sports Academy</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,600;0,700;1,100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <section class="treninzi-header">
        <nav>
            <!-- <a href="index.php"><img src="img/logo2.jpeg"></a> -->
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">POCETNA</a></li>
                    <li><a href="zakazivanje.php">ZAKAZIVANJE</a></li>
                    <li><a href="treninzi.html">TRENINZI</a></li>
                    <li><a href="kontakt.html">KONTAKT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <div class="text-box">
            <h1>Zakazi svoj termin</h1>
            <p>Zakazivanje za svaki trening je obavezno i moguce je ga izvrsiti do 6 dana unapred. <br>
                Otkazivanje treninga bez naknade moguce je do 12 sati pre pocetka treninga, u suprotnom se trening racuna kao iskoriscen.
            </p><br>
        </div>
    </section>

    <!--JavaScript for toggle menu-->
    <script>
        var navLinks = document.getElementById("navLinks");

        function showMenu() {
            navLinks.style.right = "0";

        }

        function hideMenu() {
            navLinks.style.right = "-200px"
        }
    </script>
</body>

</html>