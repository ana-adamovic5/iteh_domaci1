<?php

require "model/korisnik.php";

if (isset($_POST['usernameModal']) && isset($_POST['passwordModal'])) {
    $uname = $_POST['usernameModal'];
    $upass = $_POST['passwordModal'];

    setcookie("TestCookie", $uname, time() + 3600);
    $korisnik = new Korisnik(null, $uname, $upass);
    $odg = Korisnik::logInUser($korisnik, $conn);

    if ($odg->num_rows == 1) {
        echo `
        <script>
        console.log("Uspesno ste se prijavili.");
        </script>
        `;

        $_SESSION['user_id'] = $korisnik->id;
        header("Location: zakazivanje.php");
        exit();
    } else {
        echo `
        <script>
        console.log("Niste se prijavili.");
        </script>
        `;
    }
}

?>

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
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <section class="header">
        <nav>
            <!-- <a href="index.php"><img src="img/logo2.jpeg"></a> -->
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">POCETNA</a></li>
                    <li><a href="treninzi.html">TRENINZI</a></li>
                    <li><a href="kontakt.html">KONTAKT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <div class="text-box">
            <h1>Aerial Sports Academy</h1>
            <p>Aerial sportovi poboljsavaju snagu, fleksibilnost, stabilnost i razvnotezu jer aktiviraju <br> core, ruke i noge pruzajuci zabavnu i efikasnu alternativu vezbama u teretani.
                Pridruzi se nasoj akademiji i probaj nesto novo.
            </p><br>
            <!-- Button trigger modal -->
            <button type="button" class="hero-btn" data-bs-toggle="modal" data-bs-target="#loginModal">
                Zakazi trening
            </button>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Unesite vase podatke</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="usernameModal" class="form-label">Korisnicko ime</label>
                            <input type="text" class="form-control" id="usernameModal" name="usernameModal" autocomplete="off" aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="passwordModal" class="form-label">Sifra</label>
                            <input type="password" class="form-control" id="passwordModal" name="passwordModal" required>
                            <br><br>
                        </div>
                        <button type="button" class="hero-btn purple-btn" data-bs-dismiss="modal">Zatvori</button>
                        <button type="submit" class="hero-btn purple-btn1" name="submit">Prijavi se</button>

                    </form>
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zatvori</button>
                    <button type="submit" class="btn btn-primary" name="submit">Prijavi se</button>
                </div> -->
            </div>
        </div>
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>



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