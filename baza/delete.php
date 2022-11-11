<?php

include "connect.php";

if (isset($_POST['deletesend'])) {
    $unique = $_POST['deletesend'];

    $sql = "delete from `termin` where id=$unique";
    $result = mysqli_query($con, $sql);
}
