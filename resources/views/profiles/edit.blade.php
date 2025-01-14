@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{ $user->id}}" enctype="multipart/form-data" method="post">

        @csrf
        @method('PATCH')

        <div class="row">
            <div class="col-8 offset-2">

                <div class="row mb-4">
                    <h1>Edit Profile</h1>
                </div>

                <!-- Edit Title -->
                <div class="row mb-3">
                    <label for="title" class="col-md-4 col-form-label">Title</label>

                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $user->profile->title }}" autocomplete="title" autofocus>

                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!-- Edit Description -->
                <div class="row mb-3">
                    <label for="description" class="col-md-4 col-form-label">Description</label>

                    <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') ?? $user->profile->description }}" autocomplete="description" autofocus>

                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!-- Edit URL -->
                <div class="row mb-3">
                    <label for="url" class="col-md-4 col-form-label">URL</label>

                    <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') ?? $user->profile->url }}" autocomplete="url" autofocus>

                    @error('url')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!-- Edit Profile Image -->
                <div class="row mb-5">
                    <label for="image" class="col-md-4 col-form-label">Profile Image</label>
                    <input type="file" name="image" id="image" class="form-control-file">

                    @error('image')
                        <strong>{{ $message }}</strong>                   
                    @enderror
                </div>

                <div class="row">
                    <button class="btn btn-primary w-auto">Save Profile</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
