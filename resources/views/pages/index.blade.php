@extends('layouts.app')
@section('content')
      <div class="jumbotron text-center">
       <h1>
         {{$title}}
       </h1>

       <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
          labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
          nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
          esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
          in culpa qui officia deserunt mollit anim id est laborum.
       </p>
       <br/>
       <p>
         <a href="/register" class="btn btn-primary btn-lg" role="button">Login</a>
         <a href="/register" class="btn btn-success btn-lg" role="button">Register</a>
       </p>

     </div>
@endsection
