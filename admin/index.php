<?php

require 'connect.php';

if ($link == false){
  print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}


  if (isset($_SESSION['logged_user'])) {
    header('Location: control.php');
  }

  if (isset($_POST['do_login'])) {
    $admin = R::findOne( 'admins', ' login = ? ', [ $_POST['login'] ] );
    if (isset($admin)) {
      if ($admin->password == md5($_POST['password'])) {
        $_SESSION['logged_user'] = $admin;
        header('Location: control.php');
      }

    }
  }
  /* Создание админа /*
  $admin = R::dispense('admins');
  $admin->login = 'admin';
  $admin->password = md5('admin1');
  R::store($admin);
  */
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Вход в админку</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
      html,
      body {
        height: 100%;
      }

      body {
        display: -ms-flexbox;
        display: -webkit-box;
        display: flex;
        -ms-flex-align: center;
        -ms-flex-pack: center;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: center;
        justify-content: center;
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: 0 auto;
      }
      .form-signin .checkbox {
        font-weight: 400;
      }
      .form-signin .form-control {
        position: relative;
        box-sizing: border-box;
        height: auto;
        padding: 10px;
        font-size: 16px;
      }
      .form-signin .form-control:focus {
        z-index: 2;
      }
      .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
      }
      .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
      }
    </style>
  </head>

  <body class="text-center">
    <form class="form-signin" method="post">
      <h1 class="h3 mb-3 font-weight-normal">Вход в админку:</h1>
      <label for="inputLogin" class="sr-only">Логин</label>
      <input type="login" id="inputLogin" class="form-control mb-2" placeholder="логин" required autofocus name="login">
      <label for="inputPassword" class="sr-only">Пароль</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="пароль" required name="password" >
      <button class="btn btn-lg btn-secondary btn-block" type="submit" name="do_login">Войти</button>
    </form>
  </body>
</html>
