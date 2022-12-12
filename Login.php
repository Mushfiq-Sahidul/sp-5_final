<?php
@include 'config.php';
session_start();

if (isset($_POST['submit'])) {
    $mail = mysqli_real_escape_string($conn, $_POST['mail']);
    $pass = md5($_POST['pass1']);

    $q = "SELECT * FROM customer_info WHERE email = '$mail' && password = '$pass'";
    $result = mysqli_query($conn, $q);
    if (mysqli_num_rows($result) > 0) {
        $q2 = "SELECT name FROM customer_info WHERE email = '$mail' && password = '$pass'";
        $result2 = mysqli_query($conn, $q2);
        $row = $result->fetch_assoc();
        $_SESSION['logged'] = $row['name'];
        header('location: index.php');
    } else {
        $error[] = 'Incorrect Password or Email.';
    }
}

?>

<?php

include('header.php');

?>



<div class="login">
    <h2>Login</h2>
    <form method="post">
        <?php
            if (isset($error)) {
                foreach ($error as $error) {
                    echo '<span>' . $error . '</span>';
                }
            }
        ?>
        <input type="email" name="mail" placeholder="Email">
        <input type="password" name="pass1" placeholder="Password">
        <button class="button" type="submit" name="submit" value="Login">Login</button>
        <p><b>Don't have an account? </b><a href="Signup.php">Sign Up</a></p>
    </form>
</div>
<br />
<br />
<br />
<br />

<?php

include('footer.php');

?>