@extends('template')



@section('content')
<h1>Post</h1><br /><br />

@foreach($posts as $post)
<h2>{{ $post->title }}</h2><br />
<p>{{ $post->content }}</p><br /><br />
<hr />
@endforeach

@endsection