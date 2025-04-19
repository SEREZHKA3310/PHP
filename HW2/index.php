<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="wrapper">
      <header class="header">
        <h1>4.1. Домашняя работа: Feedback Form. Время выполнения - 3 часа</h1>
        <img src="mospolytech.jpg" alt="Политех">
      </header>
      <main class="main">
        <form action="https://httpbin.org/post" method="POST">
          <label>Текст<input type="text" name="name"></label><br>
          <label>Почта<input type="email" name="email"></label><br>
          <span>Тип обращения</span>
            <select name="type">
              <option value="report">Жалоба</option>
              <option value="offer">Предложение</option>
              <option value="gratefulness">Благодарность</option>
            </select>
          <label>Вариант ответа
            <input type="checkbox" name="letter" value="sms">
            <input type="checkbox" name="letter" value="e-mail">
          </label>
          <button type="submit">отправить</button>
        </form>
        <a href="page.php">Перейти на следующую страницу</a>
      </main>
      <footer class="footer">
        <p>задание для самостоятельной работы </p>
      </footer>
    </div>
  </body>
</html>