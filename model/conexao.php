<?php
setlocale(LC_ALL, "pt_BR", "ptb");
// ini_set("default_charset","UTF-8");
// ini_set("default_charset","ISO-8859-1");
// header("Content-type: text/html; charset=utf-8");
error_reporting(E_ALL);

//require("conMariaDB.php");
require("conPostgres.php");

include_once("./model/dao/baseDAO.php");
