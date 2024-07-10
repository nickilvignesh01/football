
<?php
    require_once("db.php");

    // $idToUpdate = 1;
    $idToUpdate = $_GET["x"];
    // Retrieve data from the form
    $sqlp = "SELECT * FROM league WHERE id = $idToUpdate";
    $resultp = mysqli_query($conn, $sqlp);
    $rowp = mysqli_fetch_assoc($resultp);

    if(isset($_POST["update"])){
        $team = $_POST['team'];
        $matches = $_POST['matches'];
        $wins = $_POST['wins'];
        $losses = $_POST['losses'];
        $points = $_POST['points'];
        $draw = $_POST['draw'];
    

        // Prepare and execute the SQL query
        $sql = "UPDATE league
        SET Team = '$team',
            Matches = '$matches',
            Wins = '$wins',
            Losses = '$losses',
            Points = '$points',
            Draw = '$draw'
        WHERE id = $idToUpdate";

        if (mysqli_query($conn, $sql)) {
            echo "New record updated successfully";
            header("location: index.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Team Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .form_container {
            max-width: 80%;
            margin: 20px auto;
            padding: 40px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .label_classes {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        input, select, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border-radius:10px;
            cursor:pointer;
        }

        input, select, textarea :hover{
            border: 1px solid #9f5311;
        }


        .button1 {
            background-color: #4caf50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="container">
    <div class = "form_container">
        
<form method="POST" enctype="multipart/form-data">
    <label for="team">Team:</label>
    <input type="text" name="team" require value ="<?= $rowp["Team"] ?>"><br>

    <label for="matches">Matches:</label>
    <input type="number" name="matches" require value ="<?= $rowp["Matches"] ?>"><br>

    <label for="wins">Wins:</label>
    <input type="number" name="wins" require value ="<?= $rowp["Wins"] ?>"><br>

    <label for="losses">Losses:</label>
    <input type="number" name="losses" require value ="<?= $rowp["Losses"] ?>"><br>

    <label for="points">Points:</label>
    <input type="number" name="points" require value ="<?= $rowp["Points"] ?>"><br>

    <label for="draw">Draw:</label>
    <input type="number" name="draw" require value ="<?= $rowp["Draw"] ?>"><br>

    <input type="submit" name = "update" value="Submit">
</form>

</div>
</div>

</body>
</html>
