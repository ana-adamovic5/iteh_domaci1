<?php

include "connect.php";

extract($_POST);
if (isset($_POST['vremeSend']) && isset($_POST['treningSend']) && isset($_POST['trenerSend'])) {
    $sql = "insert into `termin` (vreme,trening,trener) values ('$vremeSend','$treningSend','$trenerSend')";

    $result = mysqli_query($con, $sql);
}
