<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "db1";

 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);

 // Check connection
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 }

// Fetch top scorers
$query = "SELECT * FROM players ORDER BY goals DESC";
$result = mysqli_query($conn, $query);
// Close connection
mysqli_close($conn);
?>




<!DOCTYPE html>
<html>
<head>
 <title>Football League</title>
 
<!-- <link rel="stylesheet" href="main.css"> -->
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
        .bi{
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-weight: bolder;
    background-image: url(football-472047_1280.jpg);
    background-repeat: no-repeat;
    background-size: cover;

   }
   
   .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
   }
   
   .table-container {
    overflow-x: auto;
    background:blur;
    backdrop-filter:blur(50px);
    /* border: 5px solid rgba(255,255,255,.2); */
    backdrop-filter:blur(100px);
    color:black;
    border: none;
}
   
   
   table {
    width: 100%;
    border-collapse: collapse;
   }
   
   th, td {
    padding: 10px;
    text-align: center;
    border: 1px solid #ccc;
   }
   
   th {
    background-color: #f2f2f2;
   }

        nav ul {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: center;
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
  <div class="container">
    <h1>TOP GOAL SCORERS</h1>
    <div class="table-container">
      <table>
        <thead>
          <tr>
            <th>Name</th>
            <th>Team</th>
            <th>Goals</th>
            <?php
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row['name'] . '</td>';
            echo '<td>' . $row['team'] . '</td>';
            echo '<td>' . $row['goals'] . '</td>';
            echo '</tr>';
        }
    
        echo '</table>';
    } else {
        echo 'No top scorers found.';
    }
    
            ?>
          </tr>
        </thead>
          <tbody>
            <tr>
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
