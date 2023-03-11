<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Мой сайт</title>
   </style>
</head>
<body>
    <!-- Меню -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('posts.index') }}">Главная страница</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('posts.create') }}">Создать пост</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('trash.index') }}">Корзина постов</a>
                    </li>
                </ul>
                <form action="{{ route('posts.index') }}" class="d-flex" role="search" method="get">
                    @csrf
                    <input name="title" class="form-control me-2" type="search" placeholder="Поиск" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Найти</button>
                </form>
            </div>  
        </div>
    </nav>
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>