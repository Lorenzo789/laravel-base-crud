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
        $comic = Comic::all();

        return view('home', compact('comic'));
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
        //https://www.google.com/imgres?imgurl=http%3A%2F%2Fwww.fastweb.it%2Fvar%2Fstorage_feeds%2FCMS%2Farticoli%2Ffc0%2Ffc0ae789bb35c92de8b36f24c93a2595%2F640x360.jpg&imgrefurl=https%3A%2F%2Fwww.fastweb.it%2Ffastweb-plus%2Fdigital-magazine%2Fcose-url%2F&tbnid=ltdVP9OhH_UOvM&vet=12ahUKEwi65K2k1pn6AhXByqQKHeatC-AQMygAegUIARDXAQ..i&docid=Tg3wdKI3O-8moM&w=640&h=360&q=url%20image&client=firefox-b-d&ved=2ahUKEwi65K2k1pn6AhXByqQKHeatC-AQMygAegUIARDXAQ
        $sendData = $request->all();

        $validateData = $request->validate(
            [
                'title' => 'required|min:3|max:255',//funge
                'description' => 'required|min:10|max:255',//funge
                'thumb' => 'required|url',//funge
                'price' => 'required|numeric',//funge
                'series' => 'min:5|max:255',//funge
                'sale_date' => 'date|after:1500/01/01',//funge
                'type' => 'required|min:3|max:255'//funge
            ]
        );

        $newComic = new Comic();
        $newComic->title = $sendData['title'];
        $newComic->description = $sendData['description'];
        $newComic->thumb = $sendData['thumb'];
        $newComic->price = $sendData['price'];
        $newComic->series = $sendData['series'];
        $newComic->sale_date = $sendData['sale-date'];
        $newComic->type = $sendData['type'];
        $newComic->save();

        return redirect()->route('comics.show', $newComic->id)->with('created', $sendData['title']);
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

        $comic = Comic::findOrFail($id);
        
        $comic->update($sendData);

        // $comics->fill($sendData);
        // $comics->save();
        
        return redirect()->route('comics.show', $comic->id)->with('edited', $comic->title);
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
        $comic = Comic::findOrFail($id);
        $comic->delete();

        return redirect()->route('homepage')->with('deleted', $comic->title);
    }
}
