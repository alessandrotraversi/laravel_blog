@extends('template')



@section('content')
<h1>Post</h1><br /><br />

@foreach($posts as $post)
<h3>{{ $post->title }}</h3>
<p>{{ $post->content }}</p><br /><br />
<hr />
@endforeach

@endsection