<!DOCTYPE html>
  <html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <header>
      <img src="mospolytech.jpg" alt="Политех">
    </header>
    <main>
    <?php 
      $result = get_headers("https://httpbin.org/post");
      echo "<textarea>";
      print_r($result);
      echo "</textarea>";
    ?>
    </main>
    <footer>
    <a href="index.php">Перейти на предыдущую страницу</a>
    </footer>
  </body>
</html>