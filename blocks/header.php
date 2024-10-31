<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <div class="col-md-3 mb-2 mb-md-0">
        <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none"> SJ </a>
      </div>

      <nav class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <a href="/" class="p-2 text-dark">Главная</a>
        <a href="/about.php" class="p-2 text-dark">Контакты</a>
      </nav>

      <!-- если у нас будет установлена куки то мы будем вводить кабинет пользователя а если нет будем вводит кабинет войти -->
      <?php if($_COOKIE['user'] == 'true'):?>  <!-- если у нас куки [user] будет равно 'true' в таком случии мы будем вводит кабинет пользователя-->
        <a type="button" class="btn btn-outline-primary me-2" href="/auth.php">Кабинет пользователя</a>
      <?php else: ?> <!-- иначе будем вводить кнопку войти -->
        <a type="button" class="btn btn-primary" href="/auth.php">Войти</a>
      <?php endif; ?>
    </header>