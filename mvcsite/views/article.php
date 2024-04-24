<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Концепция MVC</title>
    <link rel="stylesheet" href="#">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQlaoWXA+058RXPxPg6fy4IWvTHhOE263XmFcJISAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <h1>Концепция MVC</h1>
      <div>
      <div class="article">
        <h3><?=$article['title']?></h3>
        <em>Опубликовано: <?=$article['date']?></em>
        <p><?=$article['content']?></p>
      </div>
    </div>
    <footer>
<p>Концепция MVC<br>Copyright &copy; 2018</p>
    </footer>
  </div>
  </body>
</html>
