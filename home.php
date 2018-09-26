<?php
session_start();
include 'dbh.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="home.css" type="text/css">
    <title>Home</title>
</head>
<body>
    <div id="main">
    <h1 style="background-color: #6495ed; color: white;"><?php echo  
    $_SESSION['name']?>-online</h1>
    <div class="output">
        <?php $sql = "SELECT * FROM posts";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "" . $row["name"]. " " ."::" . $row["msg"]. " --" .$row["date"]. "<br>";
                echo "<br>";
            }
        }else {
            echo "0 results";
        }
        $conn->close();

        ?>


    </div>
    <form action="send.php" method="post">
    <textarea name="msg" placeholder="type to send message" 
    class="form-control"></textarea><br>
    <input type="submit" value="send">
    </form>
    <br>
    <form action="logout.php">
    <input type="submit" style="with: 100%;
    backgroud-color: #6495ed;color: white; font-size: 20px;" value="Logout">
    </form>
    </div>
</body>
</html>