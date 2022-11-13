<?php

include "baza/connect.php";

$sql1 = "select ime from trener";
$result1 = mysqli_query($con, $sql1);

$a = array();

while ($row = mysqli_fetch_assoc($result1)) {
    $a[] = $row['ime'];
}

$sql2 = "select naziv from trening";
$result2 = mysqli_query($con, $sql2);

while ($row = mysqli_fetch_assoc($result2)) {
    $a[] = $row['naziv'];
}



// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len = strlen($q);
    foreach ($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
