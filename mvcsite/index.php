<?

require_once ("database.php");
require_once ("models/article.php");


$link = db_connect();
$articles = articles_all($link);


include("views/article.php");

?>
