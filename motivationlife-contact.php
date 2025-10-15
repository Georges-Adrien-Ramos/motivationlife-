<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href="motivationlife-contact.css">
</head>
<body>
<h1 class="titre-du-site">MOTIVATIONLIFE</h1>









 <!-- SECTION MENU DE NAVIGATION -->
  <!-- HEADER -->
  <header>
    <div class="menu-icon" id="menuToggle">☰</div>
      <!-- MENU HORIZONTAL CACHÉ -->
  <nav id="menuBar">
    <ul>
        <li><a href="motivationlife-accueil.php">ACCUEIL</a></li>
      <li><a href="motivationlife-à-propos.php">A PROPOS</a></li>
      <li><a href="#">BLOGS</a></li>
      <li><a href="motivationlife-témoignage.php">TEMOIGNAGES</a></li>
      
      
      
    </ul>
  </nav>
   <a href="motivationlife-contact.php"><img src="images/icon-google-contacts.png" alt="lien contact"></a>
   <a class="bibliothèque" href="motivationlife-bibliothèque.php">bibliothèque</a>
  <img class="image-bibliothèque" src="images/icon-bibliotheque-publique.png" alt="lien bibliothèque">
  </header>









    <!-- content de contact et enregistrement  -->
    <div class="content">
        <div class="wrapper">
            <section class="contact">
                
                <h1>contact</h1>
                <form>
                <div class="inputBox">
                    <ion-icon name="mail"></ion-icon>
                    <input type="email" name="email" required>
                    <label for="">Email</label>
                </div>
                <div class="inputBox">
                    <ion-icon name="lock-closed"></ion-icon>
                    <input type="password" required>
                    <label for="">Mot de passe </label>
                </div>
                <div class="forgot">
                    <input type="checkbox">
                    <a href="#">Mot de passe oublié?</a>
                </div>
                <BUtton>CONNEXION</BUtton>
                <div class="register-option">
                    <span>Pas de compte?</span>
                    <a href="#" id="espace-de-contact">Inscrivez-vous</a>
                </div>
                </form>

                <div class="icon">
                    <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-tiktok"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-whatsapp"></ion-icon></a>
                </div>
            </section>



            <section class="contact-suite">
                
                 
                <h1>Inscription</h1>
                <form>
                <div class="inputBox">
                    <ion-icon name="person"></ion-icon>
                    <input type="text" required>
                    <label for="">Nom Complet</label>
                </div>
                <div class="inputBox">
                    <ion-icon name="mail"></ion-icon>
                    <input type="email" name="email" required>
                    <label for="">Email</label>
                </div>
                <div class="inputBox">
                    <ion-icon name="lock-closed"></ion-icon>
                    <input type="password" required>
                    <label for="">Mot de passe </label>
                </div>
               
                <BUtton>Enregistrer</BUtton>
                <div class="register-option">
                    <span>Dèja un compte?</span>
                    <a href="#" id="espace-de-registre">Connnectez-vous</a>
                </div>
                </form>
                <div class="icon">
                    <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-tiktok"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-whatsapp"></ion-icon></a>
                </div>
            

            </section>
        </div>
    </div>














    <!-- lien pour les icons --> 
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

   <!-- lien pour javascript --> 
    <script src="motivationlife-contact.js"></script>
</body>
</html>