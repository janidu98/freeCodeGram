@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100" alt="">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pe-3">
                        <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle" style="width: 40px; height:40px" alt="">
                    </div>
                    <div>
                        <div>
                            <b><a href="/profile/{{$post->user->id}}" style="color: black; text-decoration: none">{{ $post->user->username }}</a></b>
                            <a href="#" class="px-2" style="text-decoration: none">Follow</a>
                        </div>
                    </div>
                </div>

                <hr/>

                <p>
                    <span>
                        <b><a href="/profile/{{$post->user->id}}" style="color: black; text-decoration: none">{{ $post->user->username }}</a></b>
                    </span> {{ $post->caption}}
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
