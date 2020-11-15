<br>
<form action="<?php if(isset($action) ? $action : '') ?>" method="post">
  <label for="login"> login
    <input type="text" id="login" name="login">
  </label>

  <label for="password"> password
    <input type="password" id="password" name="password">
  </label>

  <button type="submit">Войти</button>
</form>

<?php if (array_get($_POST, 'login')) {
  echo $data['login'];
} ?>

<!-- <script>alert('111')</script> -->
