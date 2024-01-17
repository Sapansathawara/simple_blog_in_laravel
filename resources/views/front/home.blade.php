@extends('front/layout.layout')

@section('page_title','Home Page')

@section('page_name','Welcome to Meri Dukaan Blog')

@section('container')

@foreach ($result as $list)
<div class="post-preview">
	<a href="{{url('post/'.$list->slug)}}">
		<h2 class="post-title">{{$list->title}}</h2>
		<h3 class="post-subtitle">{{$list->short_desc}}</h3>
	</a>
	<p class="post-meta">
		Posted on {{$list->post_date}}
	</p>
</div>
<hr class="my-4" />
@endforeach

@endsection