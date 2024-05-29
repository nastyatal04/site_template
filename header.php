<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/style_header.css" />
    <link rel="stylesheet" href="css/style_footer.css" />
    <link rel="stylesheet" href="css/style_news_slider.css" />
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="css/modal2.css">
    <link rel="stylesheet" href="css/style_form_registraciya.css">
    <link rel="stylesheet" href="css/style_form_autorizaciya.css">
    <link rel="stylesheet" href="css/style_kart_uslug2.css">
    <link rel="stylesheet" href="css/style_form_zapis.css">
  </head>
  <body>
    <header>
      <div class="container">
        <div class="logo">
          <a href="#">
            <img src="image/logo.png" alt="Logo" />
          </a>
        </div>
        <nav>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="Untitled-1.php">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </nav>
        <div class="login-btn">
          <a id="loginBtn" href="#">Войти</a>
          <!-- форама регистрации -->
          <?require('autorizaciya.php')?>
        </div>
        <div class="menu-toggle">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </header>
  </body>
</html>
<?require_once('php/connect.php');?>
