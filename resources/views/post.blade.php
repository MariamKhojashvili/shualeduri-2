@extends('welcome')
@section('content')
@if (count($posts)>0)
@foreach ($posts as $post)
<li class="list-group-item">
    <h3>{{$post->title}}</h3>
    <p>{{$post->body}}</p>
</li>
@endforeach
    
@endif

@endsection