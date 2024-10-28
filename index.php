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

    <div class="container">
        <h3 class="mb-5">Наши статьи</h3>

        <div class="d-flex flex-wrap">
            
        <!-- Тут цыкл для карточек -->
            <?php for($i = 0; $i < 5; $i++): ?>
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Просто текст</h4>
                    </div>
                    <div class="card-body">

                        <!-- добавляю из директории assets фотографии которые пронумерованные от 1 до 5. тк.
                        Цыкл начинается с 0 до 5 я к $i прибавляю + 1. -->
                        <img src="assets/<?php echo ($i + 1) ?>.jpg" class="img-thumbnail">
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>10 users included</li>
                            <li>2 GB of storage</li>
                            <li>Email support</li>
                            <li>Help center access</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-outline-primary">Подробнее</button>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>

    <!-- тут я подключаю footer -->
    <?php require "blocks/header.php" ?>

  </div>
</body>
</html>