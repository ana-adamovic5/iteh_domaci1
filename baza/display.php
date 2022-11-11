<?php
include "connect.php";

if (isset($_POST['displaySend'])) {
  $table = '<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Vreme</th>
        <th scope="col">Trening</th>
        <th scope="col">Trener</th>
        <th scope="col">Opcije</th>
      </tr>
    </thead>';

  $sql = "select * from `termin`";
  $result = mysqli_query($con, $sql);

  $number = 1;
  while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $vreme = $row['vreme'];
    $trening = $row['trening'];
    $trener = $row['trener'];

    $table .= '<tr>
        <td scope="row">' . $number . '</td>
        <td>' . $vreme . '</td>
        <td>' . $trening . '</td>
        <td>' . $trener . '</td>
        <td><button class="hero-btn purple-btn" onclick="promeniTermin(' . $id . ')">Promeni</button> <button class="hero-btn purple-btn1" onclick="obrisiTermin(' . $id . ')"> Obrisi </button></td>
      </tr>';
    $number++;
  }

  $table .= '</table>';
  echo $table;
}
