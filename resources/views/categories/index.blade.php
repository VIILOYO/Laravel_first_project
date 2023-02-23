<title>Категории</title>
<h1>Категории</h1>
<a href="{{ route('posts.index') }}">На страницу постов</a><br>
<a href="{{ route('categories.create') }}">Создать категорию</a>

@foreach ($categories as $category)
    <h3>{{ $category->title }}</h3>
    <p>{{ $category->description }}</p>
    <a href="{{ route('categories.show', [$category->slug]) }}">Смотреть подробнее</a><br>
    <small>{{ $category->created_at }}</small><hr>
@endforeach