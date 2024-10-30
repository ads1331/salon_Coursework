<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Парикмахерская "Ваш стиль"</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body>

    <!-- Шапка сайта -->
    <header>
        <div class="header-container">
            <h1>Парикмахерская "Ваш стиль"</h1>
            <nav>
                <ul>
                    <li><a href="{{route('index')}}">Главная</a></li>
                    <li><a href="{{route('booking')}}">Записаться</a></li>
                    <li><a href="{{route('master')}}">Наши мастера</a></li>
                </ul>
            </nav>
        </div>
    </header>