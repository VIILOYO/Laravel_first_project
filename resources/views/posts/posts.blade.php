@extends('posts.layouts.main')

@section('content')
    <div class="card" style="width: 18rem;">
        <ul class="list-group list-group-flush">
            @foreach ($posts as $post)
                <a href="{{ route('post.show', [$post->id]) }}"><li class="list-group-item">{{ $post->title }}</li></a>
            @endforeach
        </ul>
    </div>
@endsection