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

    <!-- Modal -->
    <div class="modal fade" id="completeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nov termin</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="mb-4">
                        <label for="completeVreme" class="form-label">Vreme</label>
                        <input type="text" class="form-control" id="completeVreme" placeholder="Unesite vreme termina">
                    </div>
                    <div class="mb-4">
                        <label for="completeTrening" class="form-label">Trening</label>
                        <select id="completeTrening">
                            <option>Aerial Hoop</option>
                            <option>Aerial Yoga</option>
                            <option>Hammock</option>
                            <option>Pilates</option>
                            <option>Core</option>
                            <option>Stretch</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="completeTrener" class="form-label">Trener</label>
                        <select id="completeTrener">
                            <option>Anja</option>
                            <option>Milan</option>
                            <option>Sara</option>
                            <option>Marija</option>
                            <option>Marko</option>
                        </select>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="hero-btn purple-btn" data-bs-dismiss="modal">Zatvori</button>
                    <button type="button" class="hero-btn purple-btn1" onclick="zakazi()">Zakazi</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Update Modal -->
    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nov termin</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="mb-4">
                        <label for="updateVreme" class="form-label">Vreme</label>
                        <input type="text" class="form-control" id="updateVreme" placeholder="Unesite vreme termina">
                    </div>
                    <div class="mb-4">
                        <label for="updateTrening" class="form-label">Trening</label>
                        <select id="updateTrening">
                            <option>Aerial Hoop</option>
                            <option>Aerial Yoga</option>
                            <option>Hammock</option>
                            <option>Pilates</option>
                            <option>Core</option>
                            <option>Stretch</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="updateTrener" class="form-label">Trener</label>
                        <select id="updateTrener">
                            <option>Anja</option>
                            <option>Milan</option>
                            <option>Sara</option>
                            <option>Marija</option>
                            <option>Marko</option>
                        </select>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="hero-btn purple-btn" data-bs-dismiss="modal">Zatvori</button>
                    <button type="button" class="hero-btn purple-btn1" onclick="promeni()">Promeni</button>
                    <input type="hidden" id="hiddendata">
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <button type="button" class="hero-btn purple-btn my-4" data-bs-toggle="modal" data-bs-target="#completeModal">
            Dodaj termin
        </button>
        <div id="displayDataTable"></div>

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

    <script>
        //tabela se uvek prikazuje
        $(document).ready(function() {
            displayData();
        })

        //display.php
        function displayData() {
            var displayData = "true";
            $.ajax({
                url: "baza/display.php",
                type: 'post',
                data: {
                    displaySend: displayData
                },
                success: function(data, status) {
                    //jQuery
                    $('#displayDataTable').html(data);
                }
            })
        }

        //insert.php
        function zakazi() {
            var vremeAdd = $('#completeVreme').val();
            var treningAdd = $('#completeTrening').val();
            var trenerAdd = $('#completeTrener').val();

            $.ajax({
                // ovde saljem podatke
                url: "baza/insert.php",
                type: 'post',
                data: {
                    vremeSend: vremeAdd,
                    treningSend: treningAdd,
                    trenerSend: trenerAdd

                },
                success: function(data, status) {
                    //function to display data
                    $('#completeModal').modal('hide');
                    displayData();
                }
            })
        }

        //delete.php
        function obrisiTermin(deleteid) {
            $.ajax({
                url: "baza/delete.php",
                type: 'post',
                data: {
                    deletesend: deleteid
                },
                success: function(data, status) {
                    displayData();
                }
            })
        }

        //update
        function promeniTermin(updateid) {
            //pristup rekordu tabele
            $('#hiddendata').val(updateid);

            $.post("baza/update.php", {
                updateid: updateid
            }, function(data, status) {
                var terminid = JSON.parse(data);
                $('#updateVreme').val(terminid.vreme);
                $('#updateTrening').val(terminid.trening);
                $('#updateTrener').val(terminid.trener);
            })
            //klikom se prikazuje forma za update
            $('#updateModal').modal('show');

        }

        //onclick update event function
        function promeni() {
            var updateVreme = $('#updateVreme').val();
            var updateTrening = $('#updateTrening').val();
            var updateTrener = $('#updateTrener').val();
            var hiddendata = $('#hiddendata').val();

            $.post("baza/update.php", {
                updateVreme: updateVreme,
                updateTrening: updateTrening,
                updateTrener: updateTrener,
                hiddendata: hiddendata,
            }, function(data, status) {
                $('#updateModal').modal('hide');
                displayData();
            });


        }
    </script>
</body>

</html>