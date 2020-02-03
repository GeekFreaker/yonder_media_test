@extends('layouts.app')

@section('content')
  <h1> Tweets</h1>
  @if(count($tweets) > 0)
    @foreach($tweets as $tweet)
        <div class="well">
          <h3><a href="/tweets/{{$tweet->id}}">{{$tweet->tweet}}</a></h3>
          <small>Written on {{$tweet->created_at}}</small>
        </div>
    @endforeach
  @else
      <p> No tweets found </p>
  @endif
@endsection
