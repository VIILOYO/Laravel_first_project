<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тестовая</title>
</head>
<body>
    @if($rand < 5 )
        <p>{{ $rand**2 }}</p>
    @elseif($rand == 10)
        <p>{{ $rand-10 }}</p>
    @else
        <p>{{ $rand }}</p>
    @endif

    <div>
        Рандомное число - {{ $rand }}<br >
        {{ $time }}
    </div>

    <div>
        <hr>
        @foreach ($items as $item)
            {{ $item }}<br>
        @endforeach
    </div>
</body>
</html>