@extends('template')



@section('content')
<h1>Post</h1><br /><br />

@foreach($posts as $post)
<h2>{{ $post->title }}</h2>
<p>{{ $post->content }}</p>
    @foreach($post->comments as $comment)
    <h3>Commenti</h3>
    <strong>Nome:</strong> {{$comment->name}}<br />
    <strong>Email:</strong> {{$comment->mail}}<br />
    <p><strong>Commento:</strong>{{$comment->comment}}</p><br />
    @endforeach
<hr />
@endforeach

@endsection