<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $comics = Comic::all();
      $title = 'Comics Index';

      return view('comics.index', compact('comics'))->with('title', $title);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $title = 'Comics Create';
      return view('comics.create')->with('title', $title);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
        'title' => 'required|unique:comics|string|max:50',
        'description' => 'required|unique:comics|string',
        'thumb' => 'Nullable|string',
        'price' => 'required|numeric',
        'series' => 'required|string|max:100',
        'sale_date' => 'required|date',
        'type' => 'required|string|max:20',
      ]);

      $comic = $request->all(); //raccolgo i dati inseriti

      // li accoppio e faccio un seed
      $comic_obj = new Comic();
      $comic_obj->title = $comic['title'];
      $comic_obj->description = $comic['description'];
      $comic_obj->thumb = $comic['thumb'];
      $comic_obj->price = $comic['price'];
      $comic_obj->series = $comic['series'];
      $comic_obj->sale_date = $comic['sale_date'];
      $comic_obj->type = $comic['type'];
      $comic_obj->save();

      //ordino la tabello al contrario e prendo il primo elemento
      $comic = Comic::orderBy('id', 'desc')->first();

      //questo manda allo show del nuovo elemento dopo l'inserimento
      $title = 'Comics Show';
      return view('comics.show', compact('comic'))->with('title', $title);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
      $title = 'Comics Show';
      return view('comics.show', compact('comic'))->with('title', $title);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
      $title = 'Comics Edit';
      return view('comics.edit', compact('comic'))->with('title', $title);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
      $request->validate([
        'title' => 'required|string|max:50',
        'description' => 'required|string',
        'thumb' => 'Nullable|string',
        'price' => 'required|numeric',
        'series' => 'required|string|max:100',
        'sale_date' => 'required|date',
        'type' => 'required|string|max:20',
      ]);

      $data = $request->all();
      $comic->update($data);

      return redirect()->route('comics.show', compact('comic'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
      $comic->delete();

      return redirect()->route('comics.index');
    }
}
