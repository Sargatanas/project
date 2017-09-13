<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Новости</title>
    <link href="css/app.css" rel="stylesheet">
</head>
<body>

@section('header')
<header class="header">
    <a class="header-logo background image" href="/">logo</a>
    <div class="header-title background">Студенческое научное общество</div>
    <div class="header-search background">
        <form>
            <input class="header-search__input" name="header.search.input" title="search">
            <button class="header-search__button">Найти</button>
        </form>
    </div>
</header>
@show

<main class="content">
    <div class="content-header">Новости</div>
    <div class="content-area">
        @section('content')
        @show
    </div>
</main>

@section('footer')
<footer class="footer"></footer>
@show

</body>
