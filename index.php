<?php session_start(); ?>
<?php if(isset($_SESSION["labels"])) unset($_SESSION["labels"]); ?>
<?php if(isset($_SESSION["urls"])) unset($_SESSION["urls"]); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <title>Экзамен</title>
</head>
<body>
    <?php include_once $_SERVER['DOCUMENT_ROOT']."/php/pages/header.php" ?>
		<?php include_once $_SERVER['DOCUMENT_ROOT']."/php/pages/login_modal.php" ?>
		<div class="container">
			<div class="row">
				<?php if(!isset($_SESSION["user"])){
					echo'<h1 class="mt-5">Добро пожаловать!</h1>
				<p>Авторизуйтесь для создания опроса</p>';
			}
				?>
				<?php if(isset($_SESSION["user"])){
					echo'<h1 class="mt-5">Добрый день: '.$_SESSION["user"]["name"].' :)</h1>
				<p>Перейдите на вкладку "Экспертная сессия для создания опроса</p>';
			}
				?>
			</div>
		</div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>