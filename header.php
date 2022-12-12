<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Gadget Store</title>

    <link rel="stylesheet" href="slider/themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="slider/themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="slider/themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="slider/themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="slider/js/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css" />

</head>

<body>

    <header>
        <section>
            <div class="promo">
                <p style="margin-top: 0;"><span class="promo2">Use code "SP-5" to get 10% discount</span></p>
            </div>
        </section>

        <section class="navbar_m">
            <nav id="nav" class="navbar">
                <h1 class="logo"><a href="./index.php"><span>G</span>adge<span>t</span>
                        <span>S</span>ho<span>p</span></a></h1>
                <a href="Gadget_Shop.php"></a>
                <div class="nav-links">
                    <?php

                    if (isset($_SESSION['logged'])) {
                        echo "
                            <a href='logout.php'><b>Logout</b></a>
                            <a href='cart.php'><i class='fa-solid fa-cart-shopping'></i></a>
                        ";
                    } else {
                        echo "
                            <a href='Signup.php'><b>Sign Up</b></a>
                            <a href='Login.php'><b>Login</b></a>
                        ";
                    }
                    ?>
                </div>
            </nav>
        </section>
    </header>