@extends('layouts.app')
@section('content')


<div id="comics_edit">
  <div class="container">
    <form class="" action="{{route('comics.update', ['comic' => $comic->id])}}" method="post">
      {{-- inserisce il token che valida l'inserimento --}}
      @csrf
      @method('PATCH')

      <input type="text" name="title" value="{{$comic->title}}" placeholder="title">
      <input type="text" name="description" value="{{$comic->description}}" placeholder="description">
      <input type="text" name="thumb" value="{{$comic->thumb}}" placeholder="thumb">
      <input type="number" name="price" value="{{$comic->price}}" placeholder="price">
      <input type="text" name="series" value="{{$comic->series}}" placeholder="series">
      <input type="date" name="sale_date" value="{{$comic->sale_date}}" placeholder="sale_date">
      <input type="text" name="type" value="{{$comic->type}}" placeholder="type">
      <input type="submit" name="Modifica" value="Modifica" placeholder="">
    </form>
  </div>
</div>








@endsection
