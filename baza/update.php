<?php

include "connect.php";

if (isset($_POST['updateid'])) {
    $termin_id = $_POST['updateid'];

    $sql = "select * from `termin` where id=$termin_id";
    $result = mysqli_query($con, $sql);

    $response = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $response = $row;
    }
    //konvertovanje php objekta u json format
    echo json_encode($response);
} else {
    $response['status'] = 200;
    $response['message'] = "Invalid or data not found";
}

//update query
if (isset($_POST['hiddendata'])) {
    $uniqueid = $_POST['hiddendata'];
    $vreme = $_POST['updateVreme'];
    $trening = $_POST['updateTrening'];
    $trener = $_POST['updateTrener'];

    $sql = "update `termin` set vreme='$vreme', trening='$trening', trener='$trener' where id=$uniqueid";
    $result = mysqli_query($con, $sql);
}
