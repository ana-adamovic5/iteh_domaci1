<?php
include "connect.php";

if (isset($_POST['displaySend'])) {
  $table = '<table id="myTable" class="table">
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
?>

<html>

<!-- JavaScript za sortiranje tabele -->
<script>
  th = document.getElementsByTagName('th');
  for (let c = 0; c < th.length; c++) {
    th[c].addEventListener('click', item(c));
  }

  function item(c) {

    return function() {
      console.log(c);
      sortTable(c);
    }
  }

  function sortTable(c) {
    var table, rows, switching, i, x, y, shouldSwitch;
    table = document.getElementById("myTable");
    switching = true;
    /*Make a loop that will continue until
    no switching has been done:*/
    while (switching) {
      //start by saying: no switching is done:
      switching = false;
      rows = table.rows;
      /*Loop through all table rows (except the
      first, which contains table headers):*/
      for (i = 1; i < (rows.length - 1); i++) {
        //start by saying there should be no switching:
        shouldSwitch = false;
        /*Get the two elements you want to compare,
        one from current row and one from the next:*/
        x = rows[i].getElementsByTagName("TD")[c];
        y = rows[i + 1].getElementsByTagName("TD")[c];
        //check if the two rows should switch place:
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
      if (shouldSwitch) {
        /*If a switch has been marked, make the switch
        and mark that a switch has been done:*/
        rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
        switching = true;
      }
    }
  }
</script>

</html>