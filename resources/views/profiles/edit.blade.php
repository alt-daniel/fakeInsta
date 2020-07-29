@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-6 p-5">
            <img src="/img/camera.jpeg" alt="" style="max-width: 175px;" class="rounded-circle">
        </div>
        <div class="col-lg-9 col-md-6 pt-5">

            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="/p/create">Add New Post</a>
            </div>
            <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            <div class="d-flex">

                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    
    <div class="row pt-5 image-row">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4 image-square">
            <a href="/p/{{ $post->id }}">
                <img src="/storage/{{ $post->image }}" class="w-100 img-thumbnail">
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
