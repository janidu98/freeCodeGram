@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
    <div class="row">
        <div class="col-6 offset-3">
            <a href="/profile/{{$post->user->id}}">
                <img src="/storage/{{ $post->image }}" class="w-100" alt="">
            </a>
        </div>
    </div>

    <div class="row pt-2 pb-4">
        <div class="col-6 offset-3">
            <div>
                <p>
                    <span>
                        <b><a href="/profile/{{$post->user->id}}" style="color: black; text-decoration: none">{{ $post->user->username }}</a></b>
                    </span> {{ $post->caption}}
                </p>
            </div>
        </div>
    </div>
    @endforeach

    <div class="row">
        <div class="col-12 justify-content-center">
            {{$posts->links()}}
        </div>
    </div>
</div>
@endsection
