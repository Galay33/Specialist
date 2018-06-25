<!DOCTYPE html>
<html>

<head>
  <title>Таблица умножения</title>
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
    <img src="logo.gif" width="187" height="29" alt="Наш логотип" class="logo" />
    <span class="slogan">приходите к нам учиться</span>
    <!-- Верхняя часть страницы -->
  </div>

  <div id="content">
    <!-- Заголовок -->
    <h1>Таблица умножения</h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <form action=''>
      <label>Количество колонок: </label>
      <br />
      <input name='cols' type='text' value="" />
      <br />
      <label>Количество строк: </label>
      <br />
      <input name='rows' type='text' value="" />
      <br />
      <label>Цвет: </label>
      <br />
      <input name='color' type='text' value="" />
      <br />
      <br />
      <input type='submit' value='Создать' />
    </form>
    <!-- Таблица -->
    <?php 
    drawTable(7, 8);

     ?>
   
  </div>
  <div id="nav">
    <h2>Навигация по сайту</h2>
    <!-- Меню -->
    <ul>
      <li><a href='index.php'>Домой</a>
      </li>
      <li><a href='about.php'>О нас</a>
      </li>
      <li><a href='contact.php'>Контакты</a>
      </li>
      <li><a href='table.php'>Таблица умножения</a>
      </li>
      <li><a href='calc.php'>Калькулятор</a>
      </li>
    </ul>
    <!-- Меню -->
  </div>
  <div id="footer">
    <!-- Нижняя часть страницы -->
    &copy; Супер Мега Веб-мастер, 2000 &ndash; 2015
    <!-- Нижняя часть страницы -->
  </div>
</body>

</html>