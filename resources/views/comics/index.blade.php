@extends('layouts.app')
@section('content')




  <div id="comics_index">

    <div class="container">
      <h2 class="titolo txt-uppercase">current series</h2>
      <div class="row">
        @foreach ($comics as $comic)
          <div class="col-lg-2">
            <a href="{{route('comics.show', ['comic' => $comic->id])}}">
              <div class="card">
                <div class="cover" style="background-image:url('{{$comic['thumb']}}')">
                </div>
                <p class="txt-uppercase mt-1">{{$comic['series']}}</p>
              </div>
            </a>
          </div>
        @endforeach

      </div>
      {{-- <br>
      <br>

      <a href="/">TORNA INDIETRO</a>

      <br>
      <br>

      <a href="{{route('comics.create')}}">CREA NUOVO COMIC</a> --}}

      <div class="load flex">
        <a class="more txt-uppercase" href="/">torna alla home</a>
        <a class="more txt-uppercase" href="{{route('comics.create')}}">crea nuovo</a>
      </div>


    </div>
  </div>












@endsection
