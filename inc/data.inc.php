<?php 
//Установка локали и выбор значений даты
setlocale(LC_ALL, 'ru_RU.utf-8');
$day = strftime('%d');
$mon = strftime('%B');
$year = strftime('%Y');

$hour = (int) strftime('%H');
$welcome = ''; // Инициализируем переменную для преветсвия
if($hour > 0 && $hour < 6) {
	$welcome = 'Доброй ночи';
	} elseif ($hour >= 6 && $hour < 12) {
		$welcome = 'Доброе утро';
	} elseif ($hour >= 12 && $hour < 18) {
		$welcome = 'Доброй день';
	}
		$welcome = 'Доброй вечер';

// Функция отрисовки меню
     $leftMenu = [
      ['link' => 'Домой', 'href' => 'index.php'],
      ['link' => 'О нас', 'href' => 'index.php?id=about'],
      ['link' => 'Контакты', 'href' => 'index.php?id=contact'],
      ['link' => 'Таблица умножения', 'href' => 'index.php?id=table'],
      ['link' => 'Калькулятор', 'href' => 'index.php?id=calc'],
    ];

 ?>