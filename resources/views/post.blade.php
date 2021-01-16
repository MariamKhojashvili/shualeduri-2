@extends('welcome')
@section('content')
@if (count($posts)>0)
<h2>Posts are got in relation with users by user_id value</h2>
@foreach ($posts as $post)
<li class="list-group-item">
    <h3>{{$post->title}}</h3>
    <h6 style="color: red">relation: user_id={{$post->user_id}}</h6>
    <p>{{$post->body}}</p>
</li>
@endforeach
    
@endif
{{-- @if (count($joinedPosts)>0)
<h2>Posts are in relation with users by user_id value</h2>
@foreach ($joinedPosts as $post2)
<li class="list-group-item">
    <h3>{{$post2->title}}</h3>
    <h6>user_id={{$post2->user_id}}</h6>
    <h6>user_id={{$post2->user_name}}</h6>
    <h6>user_id={{$post2->user_email}}</h6>
    <p>{{$post2->body}}</p>
</li>
@endforeach
    
@endif --}}
@endsection
