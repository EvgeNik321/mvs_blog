<?php
require_once("../databases.php");
require_once("../models/article.php");
$link = db_connect ();
if(isset ($_GET['action']))
$action = $_GET['action'];
Else
$action = "";
if($action == "add"){
if(! empty($_POST)) {
articles_new($link, $_POST['title'],$_POST['date'], $_POST['content']);
header("Location: index.hp");
}
include("../views/articles_admin.php");
}else if($action == "edit"){
if(!isset($_GET['id']))
header("Location: index.ph");
$id = (int) $_GET['id'];
if(!empty($_POST) && $id > 0){
articles_edit($link, $id, $_POST['title'], $_POST['data'], $_POST['content']);
header("Location: index.php");
}
$article = articles_get($link, $id);
include("../views/articles_admin.php");
}else{
$articles = articles_all($link);
include("../views/article_admin.php");
}
?>
