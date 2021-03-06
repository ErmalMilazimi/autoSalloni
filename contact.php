<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleC.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <script defer src="js/validation.js"></script>
</head>

<body>
    <div class="header">
        <a href="index.php"><img src="img/finalLogo.png" alt="Logoja"></a>
        <input type="checkbox" id="check">
        <label for="check" class="checkBtn"><i class="fas fa-bars"></i></label>
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="services.php">SERVICES</a></li>
            <li><a href="contact.php">CONTACT</a></li>
        </ul>
    </div>
    <div class="bannerC"></div>
    <div class="mainC">
        <p class="contactUs">CONTACT US</p>
        <div class="left">
            <form action="Views/insertContactForm.php" id="form" method="POST">
                <div class="inputKlasa">
                    <label for="name">Shkruani emrin:</label>
                    <input type="text" id="name" name="name" placeholder="Enter your name.." class="inputet">
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>
                <div class="inputKlasa">
                    <label for="email">Shkruani email:</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email.." class="inputet">
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error message</small>
                </div>
                <div class="inputKlasa">
                    <label for="komenti">Shkruani komentin:</label>
                    <textarea id="komenti" name="komenti" cols="30" rows="10" placeholder="Message.."></textarea>
                    <small>Error message</small>
                </div>
                <div class="btnDiv">
                    <input name="submitCtc" id="submit" type="submit" class="contactBtn" value="SEND">
                </div>
            </form>
        </div>
        <div class="right">
            <div class="simboletC">
                <p><i class="fas fa-map-marker-alt"></i></p>
                <p><i class="fas fa-phone"></i></p>
                <p><i class="fas fa-envelope"></i></p>
            </div>
            <div class="rightNames">
                <h1>AutoSalloni Shpk <br>Gjilan,RKS </h1>
                <h2>(383) 44 000 000</h2>
                <h2>autosalloni@gmail.com</h2>
                <hr>
                <div class="rightSimbolet">
                    <a href="https://www.facebook.com">
                        <p><i class="fab fa-facebook-square"></i></p>
                    </a>
                    <a href="https://www.twitter.com">
                        <p><i class="fab fa-twitter"></i></p>
                    </a>
                    <a href="https://www.instagram.com">
                        <p><i class="fab fa-instagram"></i></p>
                    </a>
                    <a href="https://www.reddit.com">
                        <p><i class="fab fa-reddit-square"></i></p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div id="hartaGoogle">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11773.311480662705!2d21.45949543616944!3d42.46331499145686!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13548d28fe87b91d%3A0xab45b8a9d06a705!2sGjilan!5e0!3m2!1sen!2s!4v1559466784779!5m2!1sen!2s"
            width="100%" height="396" frameborder="0" style="border:0" allowfullscreen>
        </iframe>
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