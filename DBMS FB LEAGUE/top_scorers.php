<?php
$db_host = 'localhost';
$db_user = 'your_username';
$db_password = 'your_password';
$db_name = 'laliga';

$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM players ORDER BY goals DESC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo '<table>';
    echo '<tr><th>Player</th><th>Goals</th></tr>';

    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row['name'] . '</td>';
        echo '<td>' . $row['goals'] . '</td>';
        echo '</tr>';
    }

    echo '</table>';
} else {
    echo 'No players found.';
}

mysqli_close($conn);
?>
