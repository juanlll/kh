@extends ('layouts.simple')
@section ('main-content')
<h2>{{$post->title}}</h2>
<p>{{$post->meta_description}}</p>
@endsection