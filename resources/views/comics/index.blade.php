@extends('layouts.app')
@section('content')


<main id="comics_index">
  @foreach ($comics as $comic)
    <a href="{{route('comics.show', ['comic' => $comic->id])}}">
      {{$comic->series}} <br>
    </a>
  @endforeach
</main>








@endsection
