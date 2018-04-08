@extends ('layouts.simple')
@section ('main-content')
<div style="height: 1px; background-color: white;"></div>
<h2>{{$post->title}}</h2>
<p>{{$post->meta_description}}</p>
<img src="/storage/{{$post->image}}" height="500" width="100%">
<div style="height: 1px; background-color: white;"></div>

	{!! $post->body !!}.
<div style="height: 1px; background-color: white;"></div>
@endsection