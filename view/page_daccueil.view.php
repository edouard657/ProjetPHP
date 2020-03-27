 <?php
  $config = parse_ini_file('../config/config.ini');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>FootMania</title>
    <link rel="stylesheet" type="text/css" href="../view/accueil.css">
    <link rel="stylesheet" type="text/css" href="../view/nav.css">
    <link rel="icon" href="<?= $config['image_path'].'logo.png' ?>">
  </head>
  <body>
    <header>
      <nav>
          <ul>
            <li><a href="../controler/produits.ctrl.php?category=<?= $this->param['categories'][0]->getID()?>">CAT1</li></a>
            <li><a href="../controler/produits.ctrl.php?category=<?= $this->param['categories'][9]->getID()?>">CAT2</li></a>
            <li><a href="../controler/produits.ctrl.php?category=<?= $this->param['categories'][3]->getID()?>">CAT3</li></a>
            <li><a href="../controler/produits.ctrl.php?category=<?= $this->param['categories'][1]->getID()?>">CAT4</li></a>
          </ul>
      </nav>
      <div class="top">
        <div class="flex">
          <img src="<?= $config['image_path'].'logo.png' ?>" alt="logo_du_site">
          <div>
            <h1>FootMania</h1>
            <h2>Le meilleur du Foot</h2>
          </div>
        </div>
      </div>
      <div class="bottom">
      </div>
    </header>
    <article>
      <?php
        for($i = 1;$i <= 3; $i++){
          ?>
          <img src="<?= $config['image_path'].'accueil_'.$i.'.jpg' ?>" alt="accueil">
          <?php
        }
      ?>
    </article>
    <footer>
      <div class="copyright">
        <p>Copyright© FootMania 2020</p>
        <ul>
          <li> <a href=#>Legal Notice</a> </li>
          <li> <a href=#>Sitemap</a> </li>
          <li> <a href=#>Contact</a> </li>
        </ul>
      </div>
  </footer>
  </body>
</html>
