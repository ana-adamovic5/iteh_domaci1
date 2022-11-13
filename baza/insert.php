<?php

include "connect.php";

$select1 = "select * from `trening`";
$treninzi = mysqli_query($con, $select1);

$select2 = "select * from `trener`";
$treneri = mysqli_query($con, $select2);

extract($_POST);
if (isset($_POST['vremeSend']) && isset($_POST['treningSend']) && isset($_POST['trenerSend'])) {

    $sql = "insert into `termin` (vreme,trening,trener) values ('$vremeSend','$treningSend','$trenerSend')";

    $result = mysqli_query($con, $sql);
}
