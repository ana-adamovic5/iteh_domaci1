<?php

$con = new mysqli('localhost', 'root', '', 'baza_asa');

if (!$con) {
    die(mysqli_error($con));
}
