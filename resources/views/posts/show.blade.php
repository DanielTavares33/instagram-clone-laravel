@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-8">
      <img src="/storage/{{ $post->image }}" alt="" />
    </div>
    <div class="col-4">
      <div>
        <h3>{{ $post->user->name }}</h3>

        <p>{{ $post->caption }}</p>
      </div>
    </div>
</div>
@endsection
