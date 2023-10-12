<?php

ini_set('display_errors', 0);
    include 'connect.php';
    session_start();
    if(isset($_POST['Login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM `admin` WHERE `user` = '$username'and `pwd` = '".md5($password)."'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        
        if(is_array($row)){
            $_SESSION["username"] = $row['user'];
            $_SESSION["password"] = $row['pwd'];
        }else{
            echo '<script type = "text/javascript">';
            echo 'alert("invalid username and password");';
            echo 'window.location.href = "index.php"';
            echo '</script>';
        }
    }
    if(isset($_SESSION["username"])){
        header("Location:menu.php");
    }

?>



<!DOCTYPE html>


<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div id="tout">
        <div>
            <div>

                <h1>one health</h1>
            </div>
            <div>Maintenant vous pouvez gerer votre clinique <br> facilment avec un simple clique </div>
            <img id="fares" src="assets/imgs/fares.png" alt="">
        </div>
        <div class="login">
            <div class="titre">Login</div>
            <form method="post">
                <div class="field">
                    <input name="username" value="<?php if(isset($_POST['username'])){echo $_POST(['username']);} ?>"
                        type="text" required>
                    <label>Admin</label>
                </div>
                <div class="field">
                    <input name="password" value="<?php if(isset($_POST['username'])){echo $_POST(['username']);} ?>"
                        type="password" required>
                    <label>Mot de Passe </label>
                </div>
                <div class="field">

                    <input type="submit" name="Login" value="Login">

                </div>

            </form>
        </div>
    </div>
</body>

</html>