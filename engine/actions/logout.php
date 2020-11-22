<?php

unset($_SESSION['user']);


// dd($_SESSION);
header('Location: http://' . $_SERVER['HTTP_HOST']. '/');