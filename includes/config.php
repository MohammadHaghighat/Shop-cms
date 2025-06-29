<?php
session_start();
$db = new PDO("mysql:host=localhost;dbname=shop-cms;charset=utf8","root","");
$db->usersTable = "users";
$db->menuTable = "menu_items";
$db->proCatTable = "pro_cat";
$db->proTable = "products";
$db->newsCatTable = "news_cat";
$db->newsTable = "news";
$db->settingTable = "setting";
$db->pageTable = "pages";
