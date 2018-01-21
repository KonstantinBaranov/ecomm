<?php
// 1. Общие настройки
ini_set('display_errors',1);//Отображение ошибок
error_reporting(E_ALL);

require 'webroot' . DIRECTORY_SEPARATOR . 'index.php';


// 2. Подключение файлов системы

define('ROOT', dirname(__FILE__));
require_once (ROOT.'components/Router.php');

// 3. Установка соединения с базой

// 4. Вызов Router