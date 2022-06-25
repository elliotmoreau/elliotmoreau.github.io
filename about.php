<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <link rel="stylesheet" href="./CSS/style.css">
  <link rel="stylesheet" media = 'screen and (max-width: 768px)' href="./CSS/mobile.css">
  <link href="https://fonts.googleapis.com/css?family=Lato|Staatliches&display=swap" rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
  <script src="https://kit.fontawesome.com/85a5fdd30e.js" async></script>

  <title>La Gazette Tulliste | A propos</title>
</head>
<body>
  <nav id="main-nav">
    <div class="container">
      <img src="img/logo.png" alt="NewsMedia" class="logo">
      <div class = 'social'>
        <a href="http://facebook.com.br" target = 'blank'><i class="fab fa-facebook fa-2x"></i></a>
        <a href="http://twitter.com.br" target = 'blank'><i class="fab fa-twitter fa-2x"></i></a>
        <a href="http://instagram.com.br" target = 'blank'><i class="fab fa-instagram fa-2x"></i></a>
        <a href="http://youtube.com.br" target = 'blank'><i class="fab fa-youtube fa-2x"></i></a>
      </div>
      <ul>
        <li><a href="index.php" >Acceuil</a></li>
        <li><a href="interviews/" >Interviews</a></li>
        <li><a href="contact.php" >Contacter</a></li>
      </ul>
    </div>
  </nav>

  <section id="about">
    <div class="container">
      <div class="page-container">
        <article class="card">
          <h1 class='l-heading'>A Propos de nous</h1>
          <p>Nous sommes des collégiens qui avons décidé de lancer un journal gratuit, sans pub ni abonnement et accessible pour tout le monde.</p>
          <div class="photos">
            <p>Romain Gorse (Journaliste) </p>
            <p>Elliot Moreau (Devloppeur) </p>
          </div>
        </article>
        <aside class="card bg-primary">
          <h2>Faire Un Don</h2>
          <p>Chaque mois une association au hasard est sélectionnée, cette semaine faites un don à : <b>Médecins de monde</b>.</p>
          <a href="https://www.paypal.com/paypalme/elliotmoreau19" class='btn btn-dak btn-block'>Faire Un Don</a>
        </aside>
      </div>
    </div>
  </section>
  
  <footer id = 'main-footer' class = 'py-2'>
    <div class="container footer-container">
      <div>
        <img src="img/logo-gray-background.png" alt="logo">
        <p>Bienvenue sur LaGazetteTulliste le magazine gratuit de votre ville.</p>
      </div>
      <div>
        <h3>Email Actualités</h3>
        <p>Email Actualites est une inscription <b>gratuite</b> qui permet de recevoir les actualités par mail.<br><br><b>Vous pouvez vous désinscrire a tout moment</b></p>
        <form>
          <input type="email" placeholder="Votre Adresse Email" required>
          <input type="submit" value="S'inscrire" class = 'btn btn-primary'>
        </form>
      </div>
      <div>
        <h3>Liens</h3>
        <ul class = 'list'>
          <li><a href="index.php">Accueil</a></li>
          <li><a href="#">A Propos</a></li>
          <li><a href="contact.php">Contacter</a></li>
        </ul>
      </div>
      <div>
        <h2>Faire Un Don</h2>
        <p>Chaque mois une association au hasard est sélectionnée, cette semaine faites un don à : <b>Médecins de monde</b>.</p>
        <a href="https://www.paypal.com/paypalme/elliotmoreau19" class="btn btn-secondary">Faire un don</a>
      </div>
      <div>
        <p>
          Copyright LaGazetteTulliste &copy; 2022, Touts Droits Réservés. 
        </p>
      </div>
    </div>
  </footer>
</body>
</html>