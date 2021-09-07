@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5"><img src="/img/profile_photo.jpg" class="rounded-circle"></div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->username}}</h1>
                <a href="/p/create">Add new Post</a>
                <a href="/profile/{{ $user->id }}/edit">Edit</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> publicações</div>
                <div class="pr-5"><strong>579</strong> seguidores</div>
                <div class="pr-5">A seguir <strong>636</strong></div>
            </div>
            <div class="pt-4"><strong>{{ $user->profile->title }}</strong></div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="url('{{$user->profile->url}}')">{{ $user->profile->url }}</a></div>
        </div>  
    </div>
    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100 h-100" />
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
