<?php

namespace App\Http\Controllers;

use App\Model\Comic;
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

        return view('home', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $sendData = $request->all();

        $newComic = new Comic();
        $newComic->title = $sendData['title'];
        $newComic->description = $sendData['description'];
        $newComic->thumb = $sendData['thumb'];
        $newComic->price = $sendData['price'];
        $newComic->series = $sendData['series'];
        $newComic->sale_date = $sendData['sale-date'];
        $newComic->type = $sendData['type'];
        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $comic = Comic::findOrFail($id);
        return view('comics.comic', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $comic = Comic::findOrFail($id);
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $sendData = $request->all();

        $comics = Comic::findOrFail($id);
        $comics->title = $sendData['title'];
        $comics->description = $sendData['description'];
        $comics->thumb = $sendData['thumb'];
        $comics->price = $sendData['price'];
        $comics->series = $sendData['series'];
        $comics->sale_date = $sendData['sale-date'];
        $comics->type = $sendData['type'];
        $comics->save();
        
        return redirect()->route('comics.show', $comics->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
