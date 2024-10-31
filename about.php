<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>PHP</title>
</head>
<body>
  <div class="container">
    <!-- тут я подключаю header  -->
    <?php require "blocks/header.php" ?>
    
    <!-- форма -->
    <div class="container mt-5">
      <h3>Контактная форма</h3>
      <form action="check.php" method="post">
        <input type="email" name="email" placeholder="Ввудите Email" class="form-control"><br>
        <textarea name="message" class="form-control" placeholder="Сообщение"></textarea><br>
        <button type="submit" name="send" class="btn btn-success">Отправить</button><br>
      </form>
    </div>

    <!-- тут я подключаю footer -->
    <?php require "blocks/footer.php" ?>
  </div>
</body>
</html>