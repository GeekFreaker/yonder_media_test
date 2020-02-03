@extends('layouts.app')

@section('content')
  <h1> {{$tweet->id}}</h1>
  <small>Updated at {{$tweet->updated_at}}</small>
@endsection
