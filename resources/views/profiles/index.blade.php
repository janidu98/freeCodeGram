@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- First Row Section -->
        <div class="row">
            <!-- Left side (logo) -->
            <div class="col-3 p-5">
                <img src="{{ $user->profile->profileImage()}}" class="rounded-circle" style="width: 180px; height: 180px" alt="Profile Image">
            </div>

            <!-- Right side -->
            <div class="col-9 p-5">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex pb-3 align-items-center">
                        <h4>{{ $user->username }}</h4>
                        <follow-button user_id="{{$user->id}}" follows="{{$follows}}"></follow-button>
                    </div>

                    @can ('update', $user->profile)
                        <a href="/p/create" style="text-decoration: none">Add New Post</a>
                    @endcan

                </div>
                
                @can ('update', $user->profile)
                    <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
                @endcan

                <div class="d-flex pt-3">
                    <!-- pe->padding right / ps->padding left -->
                    <div class="pe-5"><strong>{{$postCount}}</strong> posts</div> 
                    <div class="pe-5"><strong>{{$followersCount}}</strong> followers</div>
                    <div class="pe-5"><strong>{{$followingCount}}</strong> following</div>
                </div>

                <div class="pt-4"><h5>{{ $user->profile->title }}</h5></div>
                <div>{{ $user->profile->description }}</div>
                <div><a href="#" style="text-decoration: none; color: #090921"><b>{{ $user->profile->url }}</b></a></div>
            </div>
        </div>

        <!-- Second Row Section -->
        <div class="row pt-5">
            @foreach($user->posts as $post)
                <div class="col-4 pb-4">
                    <a href="/p/{{$post->id}}">
                        <img src="/storage/{{ $post->image }}" class="w-100 " style="height: 250px" alt="">
                    </a>
                </div>
            @endforeach
            
        </div>
    </div>
@endsection
