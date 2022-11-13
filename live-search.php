<?php

include "baza/connect.php";

if (isset($_POST['input'])) {
    $input = $_POST['input'];
    $query = "SELECT * FROM termin WHERE trening LIKE '{$input}%' OR trener LIKE '{$input}%'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) { ?>

        <table id="myTable" class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Vreme</th>
                    <th scope="col">Trening</th>
                    <th scope="col">Trener</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc(($result))) {

                    $id = $row['id'];
                    $vreme = $row['vreme'];
                    $trening = $row['trening'];
                    $trener = $row['trener'];

                ?>

                    <tr>
                        <td><?php echo $id; ?></td>
                        <td><?php echo $vreme; ?></td>
                        <td><?php echo $trening; ?></td>
                        <td><?php echo $trener; ?></td>
                    </tr>

                <?php
                }

                ?>
            </tbody>
        </table>
<?php
    }
}
