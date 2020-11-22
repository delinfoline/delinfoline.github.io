<?php 
require 'php/function.php';
$userdelinfoline = query("SELECT * FROM user_delinfoline");

if( isset($_POST["login-button"]) ) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($koneksi, "SELECT * FROM user_delinfoline WHERE
        username = '$username'");
    
    if( msqli_num_rows($result) === 1 ) {

        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"]) ){
            header("Location: index.php");
        }

    }

}
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Sahid">
    <meta name="description" content="delinfoline website">
    <meta name="keywords" content="Online Training,HTML,CSS,JavaScript">
    <title>delinfoline : sharing information across the world</title>
    <link rel="shorcut icon" href="image/favicon/delinfolinelogo2.png">
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Averia+Sans+Libre' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <nav class="main-nav">
            <div class="nav-logo">
                <img src="image/images/delinfolinelogo.png" alt="">
                <h1 class="center-box"><a href="/delinfoline/index.php">Delinfoline</a></h1>
            </div> 
            <div class="nav-menu">
                <ul class="ulnav">
                    <li class="center-box"><a href="index.php"><img class="icon-nav" src="image/icon/Navbar/home-white-36dp/1x/baseline_home_white_36dp.png" alt="homeicon"> Home</a></li>
                    <li class="center-box">
                        <a href="pages/Coming%20Soon.html"><img class="icon-nav" src="image/icon/Navbar/format_list_bulleted-white-36dp/1x/baseline_format_list_bulleted_white_36dp.png" alt="listicon">Training List</a>
                    </li>
                    <li class="center-box">
                        <a href="pages/Coming%20Soon.html"><img class="icon-nav"src="image/icon/Navbar/donut_small-white-36dp/1x/baseline_donut_small_white_36dp.png" alt="servicon">Services</a>
                    </li>
                    <li class="center-box"><a href="pages/Coming%20Soon.html"><img class="icon-nav" src="image/icon/Navbar/contact_support-white-36dp/1x/baseline_contact_support_white_36dp.png" alt="abouticon">About</a>
                    </li>
                    <li class="center-box">
                        <a href="#"><img class="loginButton"src="image/icon/Navbar/assignment_ind-white-36dp/assignment_ind-white-36dp.svg" alt="loginicon" id=loginButtonNav>Login</a>
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
    <!--script html dan javascript untuk popup login-->
    <div class="popup-login">
        <form action="" method="post">
            <div class="popup-login-isi">
                <img src="image/close.png" alt="Close" class="close" >
                <img src="image/icon/Navbar/assignment_ind-white-36dp/assignment_ind-white-36dp.svg" alt="User"> 
                <input type="text" placeholder="Username" name="username" id="username">
                <input type="password" placeholder="Password" name="password" id="password">
                <button type="submit" name="login-button" class="login-button" id="login-button">login</button>
                <br><br>
                <p>Don't have an account? <a href="php/register.php" class="registerakun" id="registerakun">Register here</a>
                </p>
            </div>
        </form>
    </div>
    
    <script>

    document.getElementById("loginButtonNav").addEventListener("click", function(){document.querySelector(".popup-login").style.display = "flex";
    })

    document.querySelector(".close").addEventListener("click", function(){document.querySelector(".popup-login").style.display = "none";
    })    

    </script>
   
    <div id="wrapper">
        <div class="opening">
            <div class="container">
                <p class="pers">Dive the latest Information along with us
                    <php echo "Cek PHP ah"; ?>
                </p>
                <button class="button"><span>Lets Join with Us</span></button>
            </div>
        </div>

        <div class="article">
            <div class="container-news">
                <div class="news">
                    <div class="image-box large">
                        <div class="news-article">
                            <h2>Latest World <a
                                    href="https://www.arcgis.com/apps/opsdashboard/index.php#/bda7594740fd40299423467b48e9ecf6"
                                    target="_blank">COVID-19's</a> Map</h2>
                            <p>Distribution map of the COVID-19 outbreaks around the world presented by Johns Hopkins
                                University.</p>
                        </div>
                    </div>
                    <div class="image-box image">
                        <div class="container-text">
                            <h2 class="text">Johns Hopkins University updated distribution map about the COVID-19
                                outbreaks around<a
                                    href="https://www.arcgis.com/apps/opsdashboard/index.php#/bda7594740fd40299423467b48e9ecf6"
                                    target="_blank"> the world</a></h2>
                        </div>
                    </div>
                </div>
                <div class="news">
                    <div class="image-box large dua">
                        <div class="news-articledua">
                            <h2>Latest <a href="https://covid19.big.go.id/" target="_blank">Indonesia COVID-19's</a> Map
                            </h2>
                            <p>Daily updated information about the COVID-19 distribution map in Indonesia developed by
                                Badan Informasi Geospasial (BIG)</p>
                        </div>
                    </div>
                    <div class="image-box image dua">
                        <div class="container-text">
                            <h2 class="text-dua">BIG updated distribution map about the COVID-19 outbreaks in <a
                                    href="https://covid19.big.go.id/" target="_blank">Indonesia</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="profile">
            <div class="pf-box satu">
                <div class="pf-textBox">
                    <h1>Profile</h1>
                    <p><span class="logo">Delinfoline</span> (DELen (share) INFOrmation onLINE), is a website that
                        supports and makes you easy to learn the fields of Geographic Information Systems (GIS), Remote
                        Sensing (RS), and Programming online. A structured learning system from the basic to the more
                        advanced applications will make it easier for you to absorb all information needed. In addition,
                        the topics contained on the website are very interesting and always follow the development of
                        technology.</p>
                    <h2 class="slogan">Enjoy your learning time with Delinfoline ...</h2>
                </div>
                <div class="soc-ico">
                    <div class="soc-icoContainer">
                        <a href="#" class="fa fa-youtube"></a>
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-google"></a>
                        <a href="#" class="fa fa-instagram"></a>
                        <a href="#" class="fa fa-github"></a>
                    </div>
                </div>
            </div>
            <div class="pf-box dua">
                <div class="pf-boxRa">
                    <div class="image-Box">
                    </div>
                </div>
            </div>
        </div>

        <div class="cardcourse">
            <div class="cardcourseContainer">
                <div class="cardcourse-box">
                    <div class="del-course">
                        <div class="del-courseHeader">
                            <h2 class="meta">Course Programme</h2>
                            <p class="meta"> Listed by delinfoline</p>
                        </div>
                    </div>
                </div>
                <div class="cardcourse-box list">
                    <div class="del-course-list gis">
                        <div class="del-courseHeader">
                            <p><a href="pages/gis.html">Course Content 1.</a></p>
                            <h2><a href="pages/gis.html"> Geographic Information System (GIS)</a></h2>
                            <p class="term"> a computer-based system of hardware and software capable of capturing,
                                storing, analyzing, and displaying geographically referenced data <br><span>( L. Montana
                                    2008 )</span></p>
                        </div>
                        <div class="del-course-meta">
                            <div class="photo">
                                <div class="photo-cover"></div>
                            </div>
                            <div class="author">
                                <p>Author</p>
                            </div>
                            <div class="name">
                                <h3>Sahid</h3>
                            </div>
                            <div class="relate-link">
                                <a href="pages/gis.html">Geographic Information System's</a>
                            </div>
                        </div>
                    </div>
                    <div class="del-course-list rs">
                        <div class="del-courseHeader">
                            <p><a href="pages/remotesensing.html">Course Content 2.</a></p>
                            <h2><a href="pages/remotesensing.html">Remote Sensing (RS)</a></h2>
                            <p class="term">remote Sensing is the science and the way (or the skill) of collecting
                                information about objects, areas or different
                                phenomena through the analysis of data obtained by a device that is not in direct
                                contact with an object, area, or
                                phenomenon of interest.
                                <br><span>( Lillesand, Kiefer, & Chipman, 2004 )</span></p>
                        </div>
                        <div class="del-course-meta">
                            <div class="photo">
                                <div class="photo-cover"></div>
                            </div>
                            <div class="author">
                                <p>Author</p>
                            </div>
                            <div class="name">
                                <h3>Sahid</h3>
                            </div>
                            <div class="relate-link">
                                <a href="pages/remotesensing.html">Remote Sensing</a>
                            </div>
                        </div>
                    </div>
                    <div class="del-course-list fotri">
                        <div class="del-courseHeader">
                            <p><a href="pages/fotri.html">Course Content 3.</a></p>
                            <h2><a href="pages/fotri.html">Photogrammetry (fotri)</a></h2>
                            <p class="term">photogrammetry is the art, science, and technology of obtaining reliable
                                information about physical objects and the
                                environment through processes of recording, measuring, and interpreting photographic
                                images and patterns of recorded
                                radiant electromagnetic energy and other phenomena
                                <br><span>( Wolf and Dewitt, 2000; McGlone, 2004 )</span></p>
                        </div>
                        <div class="del-course-meta">
                            <div class="photo">
                                <div class="photo-cover"></div>
                            </div>
                            <div class="author">
                                <p>Author</p>
                            </div>
                            <div class="name">
                                <h3>Sahid</h3>
                            </div>
                            <div class="relate-link">
                                <a href="pages/fotri.html">Photogrammetry</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="team">
            <h2 class="header">Our Elite Team</h2>
            <div class="team-list one">
                <div class="imgBox"></div>
                <div class="info">
                    <P class="name">Rizky Ramdani</P>
                    <P class="post">Co-Founder</P>
                </div>
                <div class="ico">
                    <a href="https://www.linkedin.com/in/rizky-ramdani-a17b66119/" class="fa fa-linkedin"></a>
                    <a href="https://www.facebook.com/rizky.ramdani.37" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-google"></a>
                    <a href="https://github.com/delinfoline" class="fa fa-github"></a>
                </div>
            </div>
            <div class="team-list two">
                <div class="imgBox">
                </div>
                <div class="info">
                    <P class="name">Harry Kautsar</P>
                    <P class="post">Co-Founder</P>
                </div>
                <div class="ico">
                    <a href="https://www.linkedin.com/in/harry-kautsar-085b377a/" class="fa fa-linkedin"></a>
                    <a href="https://www.facebook.com/harry.kautsar.3" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-google"></a>
                    <a href="https://github.com/delinfoline" class="fa fa-github"></a>
                </div>
            </div>
            <div class="team-list three">
                <div class="imgBox">
                </div>
                <div class="info">
                    <P class="name">Sahid</P>
                    <P class="post">CEO & Co-Founder</P>
                </div>
                <div class="ico">
                    <a href="https://www.linkedin.com/in/sahidmaani/" class="fa fa-linkedin"></a>
                    <a href="https://www.facebook.com/sahidmaani" class="fa fa-facebook"></a>
                    <a href="maani.sahid@gmail.com" class="fa fa-google"></a>
                    <a href="https://github.com/delinfoline" class="fa fa-github"></a>
                </div>
            </div>
            <div class="team-list four">
                <div class="imgBox">
                </div>
                <div class="info">
                    <P class="name">Andry Muhamad Rhamdani</P>
                    <P class="post">Co-Founder</P>
                </div>
                <div class="ico">
                    <a href="https://www.linkedin.com/in/andri-muhamad-rhamdani-0b5140a8/" class="fa fa-linkedin"></a>
                    <a href="https://www.facebook.com/andriw91" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-google"></a>
                    <a href="https://github.com/delinfoline" class="fa fa-github"></a>
                </div>
            </div>
            <div class="team-list five">
                <div class="imgBox">
                </div>
                <div class="info">
                    <P class="name">M. Abia S.</P>
                    <P class="post">Co-Founder</P>
                </div>
                <div class="ico">
                    <a href="https://www.linkedin.com/in/muhammad-abia-0a249b193/" class="fa fa-linkedin"></a>
                    <a href="https://www.facebook.com/profile.php?id=100000166166310" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-google"></a>
                    <a href="https://github.com/delinfoline" class="fa fa-github"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="footerglobal">
        <div class="footer logo">
            <img class="footer-logo" src="image/images/delinfolinelogo.png" alt="Delinfoline logo">
            <div class="ico-container youtb">
                <a href="https://www.linkedin.com/in/sahidmaani/" class="fa fa-youtube"></a>
            </div>
            <div class="ico-container linked">
                <a href="https://www.linkedin.com/in/sahidmaani/" class="fa fa-linkedin"></a>
            </div>
            <div class="ico-container face">
                <a href="https://www.facebook.com/sahidmaani" class="fa fa-facebook"></a>
            </div>
            <div class="ico-container inst">
                <a href="https://www.facebook.com/sahidmaani" class="fa fa-instagram"></a>
            </div>
            <div class="ico-container goog">
                <a href="maani.sahid@gmail.com" class="fa fa-google"></a>
            </div>
            <div class="ico-container github">
                <a href="https://github.com/delinfoline" class="fa fa-github"></a>
            </div>
        </div>
        <div class="footer delin">
            <h2><a href="#">Delinfoline</a></h2>
            <p><a href="#">About Delinfoline</a></p>
            <p><a href="#">Sign In</a></p>
            <p><a href="#">Career</a></p>
            <p><a href="#">Contact Us</a></p>
        </div>
        <div class="footer course">
            <h2><a href="#">Course List</a></h2>
            <p><a href="#">Geographic Information Systems</a></p>
            <p><a href="#">Remote Sensing</a></p>
            <p><a href="#">Photogrammetry</a></p>
            <p><a href="#">Programming</a></p>
            <p><a href="#">Website Developer</a></p>
        </div>
        <div class="footer service">
            <h2><a href="#">Service</a></h2>
            <p><a href="#">BIG Working Training</a></p>
            <p><a href="#">BPN working Training</a></p>
            <p><a href="#">Bandung working Training</a></p>
            <p><a href="#">Others</a></p>
        </div>
        <!-- <div class="footer career">career</div> -->
        <div class="footer copright"> &copy; 2019 - 2020 Delinfoline by Sahid</div>
    </div>
</body>

</html>