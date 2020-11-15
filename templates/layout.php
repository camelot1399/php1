<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?= $title ?></title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<?php require( TPL_PATH . './header.php'); ?>
	<?php require( TPL_PATH . './nav.php'); ?>

	<?= $content ?>
</body>
</html>