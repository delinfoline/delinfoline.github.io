<?php 
require 'function.php';

if( isset($_POST["register-button"]) ) {

    if ( registrasi($_POST) > 0 ) {
        echo "<script>
                alert('registration succesfull');
              </script>";
        header("Location: ../index.html");
    } else {
        echo mysqli_error($koneksi);
    }
    
    
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Sahid">
    <meta name="description" content="delinfoline website">
    <meta name="keywords" content="Online Training,HTML,CSS,JavaScript">
    <title>Registration Page</title>
    <link rel="shorcut icon" href="../image/favicon/delinfolinelogo2.png">
    <link rel="stylesheet" href="../style.css">
    <link href='https://fonts.googleapis.com/css?family=Averia+Sans+Libre' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <nav class="main-nav">
            <div class="nav-logo">
                <img src="../image/images/delinfolinelogo.png" alt="">
                <h1 class="center-box"><a href="../index.html">Delinfoline</a></h1>
            </div>
            <div class="nav-menu">
                <ul class="ulnav">
                    <li class="center-box"><a href="../index.html"><img class="icon-nav" src="../image/icon/Navbar/home-white-36dp/1x/baseline_home_white_36dp.png" alt="homeicon"> Home</a></li>
                    <li class="center-box">
                        <a href="pages/Coming%20Soon.html"><img class="icon-nav" src="../image/icon/Navbar/format_list_bulleted-white-36dp/1x/baseline_format_list_bulleted_white_36dp.png" alt="listicon">Training List</a>
                    </li>
                    <li class="center-box">
                        <a href="pages/Coming%20Soon.html"><img class="icon-nav"src="../image/icon/Navbar/donut_small-white-36dp/1x/baseline_donut_small_white_36dp.png" alt="servicon">Services</a>
                    </li>
                    <li class="center-box"><a href="pages/Coming%20Soon.html"><img class="icon-nav" src="../image/icon/Navbar/contact_support-white-36dp/1x/baseline_contact_support_white_36dp.png" alt="abouticon">About</a>
                    </li>
                    <li class="center-box">
                        <a href="#"><img class="loginButton"src="../image/icon/Navbar/assignment_ind-white-36dp/assignment_ind-white-36dp.svg" alt="loginicon" id=loginButtonNav>Login</a>
                        <br>
                    </li>
                </ul>
            </div>
            <div class="searchBox">
                <input class="searchInput" type="text" name="" placeholder="Type to looking for...">
                <button class="searchButton" href="#">
                    <span class="material-icons">
                        search
                    </span>
                </button>
            </div>
        </nav>
    </header>
    <!--Form Register-->
    <div class="registration-page-body">
        <form action="" method="post" class="registration-form">
            <h1 class="regis-header">REGISTRATION FORM</h1><br><br>
            <input type="text" placeholder="Username" name="username" id="username">
            <input type="password" placeholder="Password" name="password" id="password">
            <input type="password" placeholder="Re-type Password" name="password2" id="password2">
            <input type="text" placeholder="Name" name="nama" id="nama">
            <input type="text" placeholder="Email" name="email" id="email">
            <input type="text" placeholder="Agency" name="instansi" id="instansi">
            <button type="submit" name="register-button" class="register-button" id="register-button">register</button>
        </form>
    </div>
</body>
</html>