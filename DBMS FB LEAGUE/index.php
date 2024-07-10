<?php
require_once "db.php";
$sql = "SELECT * FROM league ORDER BY Points DESC";
//  $result = $conn->query($sql);
$rowl=mysqli_query($conn, $sql);
 $_layout="";
 if (mysqli_num_rows($rowl) > 0) {
    // Output the team data as an HTML table
    while($row = mysqli_fetch_assoc($rowl)) {
      $_layout .="
     <tr>
     <td> <a href = 'update.php?x={$row["id"]}'> {$row["Team"]} </a> </td>
     <td>  {$row["Matches"]}  </td>
     <td>  {$row["Wins"]}  </td>
     <td>  {$row["Draw"]}  </td>
     <td>  {$row["Losses"]}  </td>
     <td>  {$row["Points"]}  </td>
      </tr>
    </tbody>
    ";
    }
 } else {
    $_layout.="results 0";
 }

?>

<!DOCTYPE html>
<html>
<head>
 <title>Football League</title>
 <link rel="stylesheet" type="text/css" href="styles.css">
 <header class="title">
    <h1><center> LA LIGA  </center></h1>
<h5>“Live with a purpose, play with a purpose.”</h5></header>
    <header>
        
        <nav>
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="stadium.html">STADIUMS</a></li>
                <li><a href="index.php">STANDINGS</a></li>
                <li><a href="players.php">PLAYERS</a></li>
                <li><a href="about us.html">ABOUT US</a></li>
            </ul>
        </nav>
    </header>

   <style>
  body {
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-image: url('football.jpg');
    background-size: cover;
}

.title{
    background-color: #0f0344f7;
}
        header {
            background-color: #c11212f7;
            color: white;
            text-align: center;
            padding:4px;
        }


        nav ul {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: center;
            position: sticky;
            top: 0;
        }

        nav ul li {
            margin: 0 10px;
            padding-left:10%;
        }

        nav ul li a {
            text-decoration: none;
            color: white;
            padding:10PX;
        }

        section {
            margin: 20px;
        }

        h2 {
            color: #333;
        }
        h3 {
            color: #0a059a;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin: 5px 0;
        }

  a{
    color: black;
    text-decoration: none; 

  }

  a:hover { 
    text-decoration: underline; 
    } 
    footer {
            text-align: center;
            background-color: #333;
            color: white;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

    
 </style>
</head>
<body class = "bi">
  <div class="container">
    <h1>POINTS TABLE</h1>
    <div class="table-container">
      <table>
        <thead>
          <tr>
            <th>Team</th>
            <th>Matches</th>
            <th>Wins</th>
            <th>Draws</th>
            <th>Losses</th>
            <th>Points</th>
          </tr>
        </thead>
          <tbody>
            <tr>
              <?=$_layout ?>
            </tr>
          </tbody>
      </table>
    </div>
  </div>
  <footer>
    <p>&copy; 2023 Football League DBMS. All rights reserved.</p>
</footer>
 <script src="script.js"></script>
</body>
</html>