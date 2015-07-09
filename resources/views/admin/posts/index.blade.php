@extends('template')



@section('content')
<h1>Sezione amministrativa</h1>

<table class="table">
    <tr>
        <td>ID</td>
        <td>Title</td>
        <td>Action</td>
    </tr>
    @foreach($posts as $post)
    <tr>
        <td>{{ $post->id }}</td>
        <td>{{ $post->title }}</td>
        <td></td>
    </tr>
    @endforeach
</table>

@endsection