<br>
<form action="<?php if(isset($action) ? $action : '') ?>" method="post">
<?php if(isset($errorMsg)): ?>
  <div class="alert alert-danger" >
    <?= $errorMsg ?>
  </div>
<?php endif; ?>
  <label for="login"> login
    <input type="text" id="login" name="login">
  </label>
  <br>
  <label for="password"> password
    <input type="password" id="password" name="password">
  </label>
  <br>
  <button type="submit" class="btn btn-outline-secondary">Войти</button>
</form>

<?php if (array_get($_POST, 'login')) {
  echo $data['login'];
} ?>

<!-- <script>alert('111')</script> -->
