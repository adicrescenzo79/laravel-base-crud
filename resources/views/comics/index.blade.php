@extends('layouts.app')
@section('content')


<main id="comics_index">
  @foreach ($comics as $comic)
    <a href="#">
      {{$comic->series}} <br>
    </a>
  @endforeach
</main>








@endsection
