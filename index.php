<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoSalloni</title>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <script defer src="js/login.js"></script>
    <script defer src="js/slider.js"></script>
</head>

<body>
    <div class="header">
        <a href="index.php"><img src="img/finalLogo.png" alt="Logoja"></a>
        <input type="checkbox" id="check">
        <label for="check" class="checkBtn"><i class="fas fa-bars"></i></label>
        <ul class="headerUl">
            <li><a href="index.php">HOME</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="services.php">SERVICES</a></li>
            <li><a href="contact.php">CONTACT</a></li>
        </ul>
    </div>

    <div class="login">
        <div class="popup-model">
            <div class="popup-content">
                <div class="close">+</div>
                <div class="loginLogo"><i class="fas fa-users"></i></div>
                <div class="logreg">
                    <input class="radio" type="radio" name="lgreg" id="logp" checked>
                    <input class="radio" type="radio" name="lgreg" id="regp">
                    <label for="logp" id="logLbl">LOGIN</label>
                    <label for="regp" id="regLbl">REGISTER</label>
                </div>
                <div class="login-content">
                    <form action="LogRegLogic/loginLogic.php" name="loginForm" method="POST" id="form1">
                        <div class="inputKlasa">
                            <label for="name">Shkruaj emrin:</label>
                            <input class="input" id="name" type="text" name="usernameLog" placeholder="Username">
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error message</small>
                        </div>
                        <div class="inputKlasa">
                            <label for="password">Shkruaj password:</label>
                            <input class="input" id="password" type="Password" name="passwordLog" placeholder="Password">
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error message</small>
                        </div>

                        <input name="logSubmit" id="submit" type="submit" class="logBtn" value="LOGIN">
                    </form>
                </div>
                <div class="register-content hidden">
                    <form action="Views/insertUserViews.php" name="registerForm" method="POST" id="form2">
                        <div class="inputKlasa">
                            <label for="name2">Shkruaj emrin:</label>
                            <input class="input" id="name2" type="text" name="usernameReg" placeholder="Username">
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error message</small>
                        </div>

                        <div class="inputKlasa">
                            <label for="email2">Shkruaj email:</label>
                            <input class="input" id="email2" type="email" name="emailReg" placeholder="Email">
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error message</small>
                        </div>

                        <div class="inputKlasa">
                            <label for="password2">Shkruaj password:</label>
                            <input class="input" id="password2" type="Password" name="passwordReg" placeholder="Password">
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error message</small>
                        </div>
                        <input name="regSubmit" id="submit2" type="submit" class="logBtn" value="REGISTER">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php 

        function alertFunction(){
            echo '<script>
                alert("U regjistruat me sukses!");
            </script>';
        }
    
    ?>

    <div class="banneri">
        <div class="bannerS">
            <div class="images img1"></div>
            <div class="images img2"></div>
            <div class="images img3"></div>
            <div class="images img4"></div>
            <div class="images img5"></div>
            <div class="bannerT">
                <p><span class="auto">Auto</span><span class="salloni">Salloni</span></p>
                <button onclick="window.location.href = 'veturat.php';" class="bannerBtn">Shiko te gjitha
                    veturat</button>
                <button id="login" class="bannerBtn">LOGIN / REGISTER</button>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="markatKryesore">
            <p>Markat Kryesore</p>
            <div class="markatK">
                <a href="" class="marka lambo">
                    <div class="markaContent">
                        <h5 class="markaTxt">Lamborghini</h5>
                        <br>
                        <p class="markaTxt">Automobili Lamborghini S.p.A. is an Italian brand and manufacturer of
                            luxury
                            sports cars and
                            SUV's.</p>
                    </div>
                </a>
                <a href="" class="marka audi">
                    <div class="markaContent">
                        <h5 class="markaTxt">Audi</h5>
                        <br>
                        <p class="markaTxt">Audi AG is a German automobile manufacturer that designs, engineers,
                            produces,
                            markets and
                            distributes luxury vehicles.</p>
                    </div>
                </a>
                <a href="" class="marka mercedes">
                    <div class="markaContent">
                        <h5 class="markaTxt">Mercedes-Benz</h5>
                        <br>
                        <p class="markaTxt">Mercedes-Benz is a German global automobile marque and a division of
                            Daimler AG.</p>
                    </div>=
                </a>
                <a href="" class="marka bmw">=
                    <div class="markaContent">
                        <h5 class="markaTxt">BMW</h5>
                        <br>
                        <p class="markaTxt">BMW AG is a German multinational company which currently produces
                            automobiles and
                            motorcycles.</p>
                    </div>=
                </a>
                <a href="" class="marka vw">
                    <div class="markaContent">
                        <h5 class="markaTxt">Volkswagen</h5>
                        <br>
                        <p class="markaTxt">Volkswagen; English; shortened to VW, is a German automaker founded on
                            28 May 1937 by
                            the German
                            Labour Front.</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="markaTjera">
            <p>Markat e tjera</p>
            <div class="wrap">
                <div onclick="window.location.href = '#';" class="markat2">
                    <img src="img/Opel.png" alt="">
                    <h3>Opel</h3>
                    <p>Opel is a German automobile manufacturer, a subsidiary of French automaker Groupe PSA since
                        August 2017</p>
                </div>
                <div onclick="window.location.href = '#';" class="markat2">
                    <img src="img/tesla.png" alt="">
                    <h3>Tesla</h3>
                    <p>Tesla, Inc. is an American automotive and energy company based in Palo Alto, California.</p>
                </div>
                <div onclick="window.location.href = '#';" class="markat2">
                    <img src="img/maserati.png" alt="">
                    <h3>Maserati</h3>
                    <p>Maserati is an Italian luxury vehicle manufacturer established on 1 December 1914, in
                        Bologna.
                    </p>
                </div>
                <div onclick="window.location.href = '#';" class="markat2">
                    <img src="img/seat.png" alt="">
                    <h3>Seat</h3>
                    <p>SEAT, S.A. is a Spanish automobile manufacturer with its head office in Martorell, Spain.</p>
                </div>
                <div onclick="window.location.href = '#';" class="markat2">
                    <img src="img/ford.png" alt="">
                    <h3>Ford</h3>
                    <p>Ford is an American multinational automaker that has its main headquarter in Dearborn. It was
                        founded by Henry Ford on June 16, 1903.</p>
                </div>
                <div onclick="window.location.href = '#';" class="markat2">
                    <img src="img/toyota.jpg" alt="">
                    <h3>Toyota</h3>
                    <p>Toyota Motor Corporation is a Japanese multinational automotive manufacturer headquartered in
                        Toyota, Aichi, Japan.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="footeri">
        <div class="text-box">
            <h3 class="footerFonts"><i class="far fa-clock" id="simboletFooter"></i>Orari i Punës</h3>
            <ul>
                <li>
                    <pre class="footerFonts">E Hënë    	09:00-18:00</pre>
                </li>
                <li>
                    <pre class="footerFonts">E Martë    	09:00-18:00</pre>
                </li>
                <li>
                    <pre class="footerFonts">E Merkurë    	09:00-18:00</pre>
                </li>
                <li>
                    <pre class="footerFonts">E Enjte    	09:00-18:00</pre>
                </li>
                <li>
                    <pre class="footerFonts">E Premte    	09:00-18:00</pre>
                </li>
                <li>
                    <pre class="footerFonts">E Shtunë    	09:00-13:00</pre>
                </li>
                <li class="diel">
                    <pre class="footerFonts">E Diel   	 	Pushim!</pre>
                </li>
            </ul>
        </div>

        <div class="text-box">
            <h3 class="footerFonts"><i class="fas fa-globe-europe" id="simboletFooter"></i>Rrjetet Sociale</h3>
            <a href="https://www.facebook.com">
                <p class="footerFonts"><i class="fab fa-facebook-square" id="simboletFooter"></i>facebook/AutoSalloni
                </p>
            </a>
            <a href="https://www.twitter.com">
                <p class="footerFonts"><i class="fab fa-twitter" id="simboletFooter"></i>twitter/AutoSalloni</p>
            </a>
            <a href="https://www.instagram.com">
                <p class="footerFonts"><i class="fab fa-instagram" id="simboletFooter"></i>instagram/AutoSalloni</p>
            </a>
            <a href="https://www.reddit.com">
                <p class="footerFonts"><i class="fab fa-reddit-square" id="simboletFooter"></i>reddit/AutoSalloni</p>
            </a>
        </div>
        <div class="text-box">
            <h3 class="footerFonts"><i class="fas fa-info-circle" id="simboletFooter"></i> Informata</h3>
            <p class="footerFonts"><i class="fas fa-warehouse" id="simboletFooter"></i>Gjilan 60000.</p>
            <p class="footerFonts"><i class="fas fa-phone" id="simboletFooter"></i> +383(0) 44 000 000</p>
            <p class="footerFonts"><i class="fas fa-envelope" id="simboletFooter"></i>info@autosalloni.com</p>
        </div>
    </div>
    <div class="bottom">
        <p class="footerFonts" class="copyright">Copyright &copy; 2019. All Rights Reserved by AutoSalloni</p>
    </div>
</body>

</html>