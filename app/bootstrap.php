<?php

// файлы ядра
require_once 'core/model.php';
require_once 'core/view.php';
require_once 'core/controller.php';


// маршрутизация
require_once 'core/route.php';
Route::start(); // запускаем маршрутизатор

?>