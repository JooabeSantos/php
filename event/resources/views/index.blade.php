@extends('layout.layout')
@section('cont')
    

@foreach ($events as $event)
    

<p>{{$event->title}}</p>

@endforeach

@endsection