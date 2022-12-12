<?php
@include 'config.php';
include('header.php');

if (isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $contact_number = mysqli_real_escape_string($conn, $_POST['contact_number']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['pass1']);
    $cpass = md5($_POST['pass2']);

    if ($pass != $cpass) {
        $error[] = 'Password does not matched!';
    } else {
        $select = "SELECT * FROM customer_info WHERE email = '$email' && password = '$pass' ";
        $result = mysqli_query($conn, $select);

        if (mysqli_num_rows($result) > 0) {
            $error[] = 'You already have an account! Please try to login!';
        } else {
            if ($pass != $cpass) {
                $error[] = 'Password does not matched!';
            } else {
                $insert = "INSERT INTO customer_info(name, phone_no, email, password) VALUES('$name','$contact_number','$email','$pass')";
                mysqli_query($conn, $insert);
                echo "Account created successfully!";
            }
        }
    }

}
;

?>


<div class="login">
    <h2>Register Account</h2>

    <?php
    if (isset($error)) {
        foreach ($error as $error) {
            echo '<span>' . $error . '</span>';
        }

    }
    ?>

    <form method="post">
        <input type="name" name="name" placeholder="Name">
        <input type="tel" name="contact_number" placeholder="Contact Number">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="pass1" placeholder="Password">
        <input type="password" name="pass2" placeholder="Confirm Password">
        <button class="button" type="submit" name="submit">Sign Up</button>
        <p><b>Already have an account? </b><a href="Login.php">Log In</a></p>
    </form>


</div>
<?php

include('footer.php');

?>