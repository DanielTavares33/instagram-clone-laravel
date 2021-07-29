@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5"><img src="img/profile_photo.jpg" class="rounded-circle"></div>
        <div class="col-9 pt-5">
            <div>
                <h1>{{$user->username}}</h1>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>538</strong> seguidores</div>
                <div class="pr-5"><strong>98</strong> publicações</div>
                <div class="pr-5">A seguir <strong>636</strong></div>
            </div>
            <div class="pt-4"><strong>Daniel Tavares</strong></div>
            <div>QAA at Jumia Porto Tech Center </br> 95 - Sjm</div>
            <div><a href="#">soundcloud.app.goo.gl/jno2n</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="img/profile_photo.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="img/profile_photo.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="img/profile_photo.jpg" class="w-100">
        </div>
    </div>
</div>
@endsection
