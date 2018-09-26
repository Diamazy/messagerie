<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
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
                <input type="text" name="pass" placeholder="Password"> <br><br>
                <button style="background-color: #6495ed; color: white;" type="submit"><b>Login</b>
            </button>
            </form>

            <form action="signup.php" method="post">
                <h2>dont have an account sign up header_register_callback</h2>
                <label>Username:</label>
                <input type="text" name="uname" placeholder="Username"><br><br>
                <label>Email Add:</label>
                <input type="text" name="Email" placeholder="Email"><br><br>
                <label>Password:</label>

                <input type="text" name="Password" placeholder="Username"><br><br>
                <button style="background-color: #6495ed; color: white;" type="submit"><b>siginup</b>
            </button>

            </form>
        </div>
    </div>
</body>
</html>

