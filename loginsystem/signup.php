<?php
    include_once "header.php";
?>

    <section class="main-container">
        <div class="main-wrapper">
            <h2>Sign Up</h2>
            <form class="signup-form" action="signup.inc.php" method="POST">
            	<input type="text" name="first" placeholder="Firstname">
            	<input type="text" name="last" placeholder="Lastname">
            	<input type="text" name="email" placeholder="E-Mail">
            	<input type="text" name="uid" placeholder="Username">
            	<input type="password" name="pwd" placeholder="Password">
            	<button type="submit" name="submit" value="submit">SignUp</button>
            </form>
        </div>
    </section>

<?php
    include_once "footer.php";
?>