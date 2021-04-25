<?php
session_unset();
include "header.php";
?>


                    <?php
                    if ($result->num_rows > 0) {
                        echo "<table>";
                        echo "<thead>";
                        echo "<tr>";
                        echo "<th>#</th>";
                        echo "<th>Name</th>";
                        echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['name'] . "</td>";
                        }
                        echo "</tbody>";
                        echo "</table>";
                        mysqli_free_result($result);
                    } else {
                        echo "<p class='lead'><em>No records were found.</em></p>";
                    }
                    ?>
              

<?php
include "footer.php";
?>