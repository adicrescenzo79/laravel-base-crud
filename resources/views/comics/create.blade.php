@extends('layouts.app')
@section('content')


<main id="comics_create">
  <form class="" action="" method="post">
    <input type="text" name="title" value="" placeholder="title">
    <input type="text" name="description" value="" placeholder="description">
    <input type="text" name="thumb" value="" placeholder="thumb">
    <input type="number" name="price" value="" placeholder="price">
    <input type="text" name="series" value="" placeholder="series">
    <input type="date" name="sale_date" value="" placeholder="sale_date">
    <input type="text" name="type" value="" placeholder="type">
    <input type="submit" name="Inserisci" value="Inserisci" placeholder="">
  </form>
</main>








@endsection
