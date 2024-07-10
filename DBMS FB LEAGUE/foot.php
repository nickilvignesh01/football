<?php
 require_once("db.php")

 // Retrieve the latest team data from the database
 $sql = "SELECT * FROM league ORDER BY points DESC";
 $result = $conn->query($sql);

 if ($result->num_rows > 0) {
    // Output the team data as an HTML table
    echo "<tbody>";
    while($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row["Team"] . "</td>";
      echo "<td>" . $row["Matches"] . "</td>";
      echo "<td>" . $row["Wins"] . "</td>";
      echo "<td>" . $row["Draw"] . "</td>";
      echo "<td>" . $row["Losses"] . "</td>";
      echo "<td>" . $row["Points"] . "</td>";
      echo "</tr>";
    }
    echo "</tbody>";
 } else {
    echo "0 results";
 }

 $conn->close();
?>