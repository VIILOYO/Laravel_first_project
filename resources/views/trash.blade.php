@extends('posts.layouts.main')

@section('content')

@foreach ($posts as $post)
<div class="card">
    <div class="card-header">
        Лайки: {{ $post->likes }}
    </div>
    <div class="card-body">
        <h5 class="card-title">{{ $post->title }}</h5>
        <p class="card-text">{{ $post->content }}</p>
        <a href="{{ route('trash.restore', [$post->id]) }}" class="btn btn-success" style="float: left;">Восстановить</a>

        <form action="{{ route('trash.destroy', [$post->id]) }}" method="post" style="margin-left: 20px;">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Удалить безвозвратно</button>
         </form>
    </div>
    
</div>
@endforeach

@endsection