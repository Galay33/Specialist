<?php 

include_once "inc/data.inc.php";
include_once "inc/lib.inc.php";

//Инициализация заголовков
$title = 'Сайт нашей школы';
$header = "$welcome, Гость";
$id = strtolower(strip_tags(trim($_GET['id'])));
switch($id) {
    case 'about':
       $title = "О сайте";
        $header = "О нашем сайте";
        break;
     case 'contact':
       $title = "Контакты";
        $header = "Обратная связь";
        break;
      case 'table':
           $title = "Таблица умножения";
            $header = "Таблица умножения";
            break;
       case 'calc':
           $title = "Калькулятор";
            $header = "Калькулятор";
            break;
    }


 ?>

<!DOCTYPE html>
<html>

<head>
  <title><?php echo $title ?></title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
  <style>body {
  margin: 0;
  padding: 0;
  background-color: #FFFFFF;
  color: #000000;
  font-family: Arial, Helvetica, sans-serif;
  border-top: 2px solid #2A4F6F;
}

#header {
  border-top: 1px solid #778899;
  border-bottom: 1px dotted #B2BCC6;
  height: 3em;
}

#header .slogan {
  font: 120% Georgia, "Times New Roman", Times, serif;
  color: #778899;
  background-color: transparent;
  float: right;
  width: 300px;
  text-align: right;
  margin-right: 2em;
  margin-top: 0.5em;
}

#header .logo {
  float: left;
  width: 187px;
  margin-left: 1.5em;
  margin-top: 0.5em;
}

#nav {
  position: absolute;
  top: 5em;
  left: 1em;
  width: 14em;
}

#nav ul {
  list-style: none;
  margin-left: 1em;
  padding-left: 0;
}

#nav li {
  font-size: 90%;
  border-bottom: 1px dotted #B2BCC6;
  margin-bottom: 0.3em;
}

#nav a:link,
#nav a:visited {
  text-decoration: none;
  color: #2A4F6F;
  background-color: transparent;
}

#nav a:hover {
  color: #778899;
}

#nav h2 {
  font: 110% Georgia, "Times New Roman", Times, serif;
  color: #2A4F6F;
  background-color: transparent;
  border-bottom: 1px dotted #cccccc;
}

#content {
  margin-left: 16em;
  margin-right: 2em;
  text-align: justify;
}

h1 {
  font: 150% Georgia, "Times New Roman", Times, serif;
}

blockquote {
  font: 70% Georgia, "Times New Roman", Times, serif;
  text-align: right;
}

h3 {
  font: 120% Georgia, "Times New Roman", Times, serif;
}

ol li {
  font-size: 90%;
}

#content p,
form {
  font-size: 90%;
  line-height: 1.6em;
  padding-left: 1.2em;
}

#footer {
  clear: both;
  text-align: center;
  border-top: 1px dotted #B2BCC6;
  margin-top: 10px;
  font: 90% Georgia, "Times New Roman", Times, serif;
  color: #2A4F6F;
  background-color: transparent;
}</style>
</head>

<body>

  <div id="header">
    <!-- Верхняя часть страницы -->
   <?php 
   require 'inc/top.inc.php';

    ?>
    <!-- Верхняя часть страницы -->
    
  </div>

  <div id="content">
    <!-- Заголовок -->
    <h1><?php echo $header; ?></h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <?php 
  
      switch ($id) {
          case 'about':
              include 'about.php';
              break;
          case 'contact':
              include 'contact.php';
              break;
          case 'table':
              include 'table.php';
              break;
           case 'calc':
              include 'calc.php';
              break;
         default:
              include 'inc/index.inc.php';
           }
     ?>
    <!-- Область основного контента -->
    
  </div>
  <div id="nav">
    <!-- Навигация -->
    <?php 
      include "inc/menu.inc.php";
     ?>
    <!-- Навигация -->
  </div>
  <div id="footer">
    <!-- Нижняя часть страницы -->
   <?php  
   include_once "inc/bottom.inc.php";
   ?>
    <!-- Нижняя часть страницы -->
  </div>
</body>

</html>