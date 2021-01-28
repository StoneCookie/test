<?php include $_SERVER["DOCUMENT_ROOT"] . "/php/classes/LabelClass.php"; ?>
<?php session_start(); ?>
<?php if(!isset($_SESSION["user"])) header("Location: /index.php"); ?>
<?php if(isset($_SESSION["labels"])) unset($_SESSION["labels"]); ?>
<?php if(isset($_SESSION["urls"])) unset($_SESSION["urls"]); ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/php/connect/connect.php"; ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Экзамен</title>
</head>
<body>
    <?php include_once $_SERVER['DOCUMENT_ROOT']."/php/pages/header.php" ?>
<?php
$sessions = mysqli_query($connect, "SELECT * FROM `session`");
if(mysqli_num_rows($sessions) > 0){
    echo '<table class="table mt-3">
        <thead>
        <tr>
            <th scope="col">№</th>
            <th scope="col">Название экспертной сессии</th>
            <th scope="col">Действия</th>
        </tr>
        </thead>
				<tbody>';}else{
					echo '<div class="container">
						<div class="row"><h1 class="mt-5">Вы пока не создали ни одной экспертной сессии :(</h1>
						</div>
					</div>';
				}
				?>

        <?php

            $sessions = mysqli_query($connect, "SELECT * FROM `session`");

            if(mysqli_num_rows($sessions) > 0){
                $sessions = mysqli_fetch_all($sessions);
                for($i = 0; $i < count($sessions); $i++){
                    if($sessions[$i][3] == 1){
                        echo '<tr class = "table-success">
                            <th scope="row">'.($i+1).'</th>
                            <td><a href = "current/index.php?id='.$sessions[$i][0].'" class = "d-flex p-2">Перейти к: &#171;'.$sessions[$i][1].'&#187;</a></td>
                            <td>
                             <a href = "/php/session/close.php?id='.$sessions[$i][0].'" class = "btn btn-warning">Остановить</a>
                             <a href = "/php/session/delete.php?id='.$sessions[$i][0].'" class = "btn btn-danger">Удалить</a>
                            </td>
                          </tr>';
                    }
                    else if($sessions[$i][3] == 0){
                        echo '<tr class = "table-danger">
                            <th scope="row">'.($i+1).'</th>
                            <td><a href = "current/index.php?id='.$sessions[$i][0].'" class = "d-block p-2">Перейти к: &#171;'.$sessions[$i][1].'&#187;</a></td>
                            <td>
                             <a href = "/php/session/open.php?id='.$sessions[$i][0].'" class = "btn btn-success">Запустить</a>
                             <a href = "/php/session/delete.php?id='.$sessions[$i][0].'" class = "btn btn-danger">Удалить</a>
                            </td>
                          </tr>';
                    }
                }
            }

        ?>
        </tbody>
    </table>

		<?php include_once $_SERVER['DOCUMENT_ROOT']."/php/pages/login_modal.php" ?>
		<div class="d-flex justify-content-center mt-5">
		<?php include_once $_SERVER['DOCUMENT_ROOT']."/php/ui/menu.php" ?>
		</div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>