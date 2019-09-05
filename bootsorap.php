<?php
require "mvc/Loader.php";
$loader = new Loader();
//ディレクトリ登録
$loader->regDirectory(dirname(__FILE__) . "/mvc");
$loader->regDirectory(dirname(__FILE__) . "/models");
//オートロードに登録
$loader->register();
