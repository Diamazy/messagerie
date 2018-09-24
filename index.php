<?php
if(isset($_GET['page']) && !empty($_GET['page'])){
    die("ok");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Messagerie</title>
</head>
<body>
 <div id="main">
     <div id="info">
         <h2>Login here</h2>
         <form action="login.php" method="post">
             <label> <b>Username</b></label>
             <input type="text" name="uname" placeholder="User name"><br><br>
             <label> <b>Password</b></label>
             <input type="text" nama="pass" placeholder="Password"> <br><br>
             <button style="background-color: #6495ed; color: white;" type="submit"><b>Login</b>
            </button>
         </form>
     </div>
 </div>
</body>
</html>

