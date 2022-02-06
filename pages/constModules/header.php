<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="https://bootstrap5.ru/css/docs.css">
    <link rel="stylesheet" href="css/weather_style.css">
    <link rel="stylesheet" href="css/movie_style.css">
</head>

<body>


    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">Modern Technologies</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="/">Главная страница</a>
            <?php
            if ($_COOKIE == false) {
            ?>
                <a class="btn btn-outline-primary" href="login">Войти</a>
            <?php
            } else {
            ?>
                <a class="p-2 text-dark" href="weather">Прогноз погоды</a>
                <a class="p-2 text-dark" href="movies">Поиск фильмов</a>
                <a class="btn btn-danger" href="logout">Выйти</a>
            <?php
            }
            ?>
        </nav>
    </div>