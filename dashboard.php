<?php

    if(!isset($_SERVER['HTTP_REFERER'])){
        header("Location:index.php");
        exit;
    }

    include 'DbConnection/DbConn.php';

    $dbConn = new DBConnection();
    $conn = $dbConn->getConnection();

?>



<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleDash.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
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

    <div class="bannerDash">
        <p>Admin Dashboard</p>
    </div>

    <div class="mainDash">
        <div class="buttonat">
            <button class="buttons" id="users">USERS</button>

            <button class="buttons" id="veturat">VETURAT</button>

            <button class="buttons" id="contact">CONTACT</button>
        </div>

        <div class="usersDash">

            <div style="width:100%; height:100px; display:flex; flex-direction: row;
            justify-content:space-around;align-items:center">
            <form action="deleteUser.php" method="POST" style="display:flex;flex-direction:column">
            
            <label for="deleteUser">Fshij usera permes ID-se:</label>
            <input type="text" name="userId">
            <input type="submit" value="DELETE" name="deleteBtn">
            
            </form>

            <form action="bejAdmin.php" method="POST" style="margin:5px;display:flex;flex-direction:column">
            
            <label for="">Bej admin usera permes ID-se:</label>
            <input type="text" name="userId">
            <input type="submit" value="CONFIRM" name="adminBtn">
            
            </form>

            </div>

            <?php 

            $sql = $conn->prepare("SELECT * FROM useri");

            $sql->execute();

            while ($result = $sql->fetch(PDO::FETCH_ASSOC)) {
                
                ?>
                <div class="user">
                    <p>ID:<?php echo $result['id'] ?></p>
                    <p>Username:<?php echo $result['username'] ?></p>
                    <p>Password:<?php echo $result['password'] ?></p>
                    <p>Email:<?php echo $result['email'] ?></p>
                    <p>Is Admin:<?php 
                    
                    if($result['isAdmin'] == 1){
                        echo 'True';
                    }
                    else {
                        echo 'False';
                    }
                    
                    ?></p>
                </div>
                
                <?php
            }

            ?>
        </div>

        <div class="veturatDash hidden">

            <div style="width:100%; height:100px; display:flex; flex-direction: column;
            justify-content:center;align-items:center">
            <form action="deleteVetura.php" method="POST">
            
            <label for="deleteUser">Fshij veturat permes ID-se:</label>
            <input type="text" name="veturaid">
            <input type="submit" value="DELETE" name="deleteBtn">
            
            </form>
            </div>

            <?php 

            $sql3 = $conn->prepare("SELECT * FROM veturat");

            $sql3->execute();

            while ($result3 = $sql3->fetch(PDO::FETCH_ASSOC)) {
                
                ?>

                <div class="vetura">
                    <img src="img/veturat/<?php echo $result3['img']?>" alt="">
                    <div>
                        <p>ID:<?php echo $result3['id']?></p>
                        <p>Marka:<?php echo $result3['marka']?></p>
                        <p>Modeli:<?php echo $result3['modeli']; ?></p>
                        <p>Viti:<?php echo $result3['viti']; ?></p>
                        <p>Motorri:<?php echo $result3['motorri']; ?></p>
                        <p>Kilometrazha:<?php echo $result3['kilometrat']." Km"; ?></p>
                    </div>
                </div>
                
                <?php
            }
            
            
            ?>
        </div>

        <div class="contactDash hidden">
            
            <div style="width:100%; height:100px; display:flex; flex-direction: column;
            justify-content:center;align-items:center">
            <form action="deleteContact.php" method="POST">
            
            <label for="deleteUser">Fshij contactet permes emrit:</label>
            <input type="text" name="emri">
            <input type="submit" value="DELETE" name="deleteBtn">
            
            </form>
            </div>

            <?php

                $sql2 = $conn->prepare("SELECT * FROM contactTable");

                $sql2->execute();

                while ($result2 = $sql2->fetch(PDO::FETCH_ASSOC)) {
                    
                    ?>
                    
                    <div class="contact">
                        <p>Username:<?php echo $result2['emri'] ?></p>
                        <p>Email:<?php echo $result2['email'] ?></p>
                        <p>Komenti:<?php echo $result2['komenti'] ?></p>
                    </div>
                    
                    <?php
                }

            ?>
        
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

    <script src="js/dashButtons.js"></script>
</body>

</html>