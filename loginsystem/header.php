<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login System</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <header>
        <nav>
            <div class="main-wrapper">
                <ul>
                    <li><a href="index.php">Home</a></li>
                </ul>
                <div class="nav-login">
                    <?php
                        if(isset($_SESSION['u_id'])){
                            echo '<form action="logout.inc.php" method="POST">
                                  <button type="submit" name="submit">Logout</button>
                    </form>';
                        }else{
                            echo '<form action="login.inc.php" method="POST">
                        <input type="text" name="uid" placeholder="Username/E-mail">
                        <input type="password" name="pwd" placeholder="Password">
                        <button type="submit" name="submit">Login</button>
                    </form>
                    <a href="signup.php">Sign up</a>';
                        }
                    ?>
                    
                    
                </div>
            </div>
        </nav>
    </header>