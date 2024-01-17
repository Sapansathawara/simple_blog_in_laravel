@extends('front/layout.layout')

@section('page_title',$result[0]->name)

@section('page_name',$result[0]->name)

@section('container')

<p>{!! $result[0]->description !!}</p>

@endsection