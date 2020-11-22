<!-- <div class="nav">
  <div class="nav__item">
    <a href="/news">Новости</a>
  </div>

  <div class="nav__item">
    <a href="/photoList">Фотогалерея 4 урок</a>
  </div>

  <div class="nav__item">
    <a href="/fruits">Фотогалерея</a>
  </div>

  <div class="nav__item">
    <a href="/login">login</a>
  </div>

  <div class="nav__item">
    <a href="/calculator">Калькулятор</a>
  </div>

  <div class="nav__item">
    <a href="/register">Регистрация</a>
  </div>

  <div class="nav__item">
  <?php if(array_get($_SESSION, 'user')): ?>
  <a href="/logout">Выход</a>
  <?php else: ?>
    <a href="/login">Вход</a>
  <?php endif; ?>
  </div>

</div> -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- <a class="navbar-brand" href="#">Navbar</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <!-- <a class="nav-link" href="#">Link</a> -->
        <a class="nav-link" href="/news">Новости</a>
      </li>
      <li class="nav-item">
        <!-- <a class="nav-link disabled" href="#">Disabled</a> -->
        <a class="nav-link" href="/photoList">Фотогалерея 4 урок</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/fruits">Фотогалерея</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/login">login</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/calculator">Калькулятор</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/register">Регистрация</a>
      </li>

      <li class="nav-item">
      <?php if(array_get($_SESSION, 'user')): ?>
      <a class="nav-link" href="/logout">Выход</a>
      <?php else: ?>
        <a class="nav-link" href="/login">Вход</a>
      <?php endif; ?>
      </li>
    </ul>
  </div>
</nav>