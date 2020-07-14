<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AutoSalloni</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/styleV2.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
            integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
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
        <div class="bannerV"></div>
        <div class="mainV">
            <div class="left">
                <div>
                    <label for="search">Kerko veturat:</label>
                    <input type="text" class="search" id="search" onkeyup="">
                </div>
                
                <form action="Views/insertVeturaViews.php" class="postoV" method="POST">
                    <h3>Posto veturen tende</h3>
                    <label for="marka">Marka:</label>
                    <input name="marka" id="marka" type="text" required>
                    <label for="modeli">Modeli:</label>
                    <input name="modeli" id="modeli" type="text" required>
                    <label for="viti">Viti:</label>
                    <input name="viti" id="viti" type="text" required>
                    <label for="motorri">Motorri:</label>
                    <input name="motorri" id="motorri" type="text" required>
                    <label for="kilometrat">Kilometrat:</label>
                    <input name="kilometrat" id="kilometrat" type="text" required>
                    <label for="fotot" class="ngarkoKetu">Ngarko fotot e vetures</label>
                    <input id="fotot" type="file">

                    <div>
                        <input name="postoVeturen" type="submit" value="POSTO">
                    </div>
                </form>
            </div>
            <div class="right">
                <?php 

                include 'DbConnection/DbConn.php';

                $sql = 'SELECT * FROM veturat';

                $dbConn = new DBConnection();
                $conn = $dbConn->getConnection();

                $sql = $conn->prepare("SELECT * FROM veturat");

                $sql->execute();

                while ($result = $sql->fetch(PDO::FETCH_ASSOC)) {
                    
                    ?>
                    <div class="veturat">
                    <img src="img/veturat/audiA82018.jpg" alt="">
                    <div class="veturatInfo">
                        <p class="titulli"> <?php echo $result['marka']." ".$result['modeli']; ?></p>
                        <p>Viti: <?php echo $result['viti']; ?></p>
                        <p>Motorri: <?php echo $result['motorri']; ?></p>
                        <p>Kilometrat: <?php echo $result['kilometrat']." Km"; ?></p>
                    </div>
                    </div>
                    
                    <?php
                }

                ?>

                <!-- <div class="veturat">
                    <img src="img/veturat/audiA82018.jpg" alt="">
                    <div class="veturatInfo">
                        <p class="titulli">Audi A8</p>
                        <p>Viti: 2018</p>
                        <p>Motorri: 4.2L Diesel</p>
                        <p>Kilometrat: 70000 km</p>
                    </div>
                </div>
                <div class="veturat">
                    <img src="img/veturat/benzE632020.jpg" alt="">
                    <div class="veturatInfo">
                        <p class="titulli">Mercedes e63</p>
                        <p>Viti: 2020</p>
                        <p>Motorri: 6.3L Petrol</p>
                        <p>Kilometrat: 0 km</p>
                    </div>
                </div>
                <div class="veturat">
                    <img src="img/veturat/bmw7502018.jpg" alt="">
                    <div class="veturatInfo">
                        <p class="titulli">BMW 750Li</p>
                        <p>Viti: 2018</p>
                        <p>Motorri: 4.2L Diesel</p>
                        <p>Kilometrat: 70000 km</p>
                    </div>
                </div>
                <div class="veturat">
                    <img src="img/veturat/audiA72016.jpg" alt="">
                    <div class="veturatInfo">
                        <p class="titulli">Audi A7</p>
                        <p>Viti: 2016</p>
                        <p>Motorri: 4.0 Petrol</p>
                        <p>Kilometrat: 170000 km</p>
                    </div>
                </div>
                <div class="veturat">
                    <img src="img/veturat/bmw7502018.jpg" alt="">
                    <div class="veturatInfo">
                        <p class="titulli">BMW 530D</p>
                        <p>Viti: 2010</p>
                        <p>Motorri: 3.0L Diesel</p>
                        <p>Kilometrat: 230000 km</p>
                    </div>
                </div>
                <div class="veturat">
                    <img src="img/veturat/benzS2018.jpg" alt="">
                    <div class="veturatInfo">
                        <p class="titulli">Mercedes S class</p>
                        <p>Viti: 2018</p>
                        <p>Motorri: 4.2 Petrol</p>
                        <p>Kilometrat: 4000 km</p>
                    </div>
                </div>
                <div class="veturat">
                    <img src="img/veturat/audiA62013.jpg" alt="">
                    <div class="veturatInfo">
                        <p class="titulli">Audi A6</p>
                        <p>Viti: 2013</p>
                        <p>Motorri: 4.0 Petrol</p>
                        <p>Kilometrat: 240000 km</p>
                    </div>
                </div> -->
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
        <script src="js/search.js"></script>
    </body>
</html>