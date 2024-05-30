<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    //
    public function index()
    {
        $comics = Comic::all();


        return view("comics.index", compact("comics"));
    }

    public function show(Comic $comic)
    {
        return view("comics.show", compact("comic"));
    }
    public function create()
    {
        return view("comics.create");
    }
    public function store(Request $request)
    {
        $form_data = $request->all();
        
        // $new_comic = Comic::create($form_data);
        $new_comic = new Comic();

        $new_comic->thumb = $form_data["thumb"];
        $new_comic->title = $form_data["title"];
        $new_comic->description = $form_data["description"];
        $new_comic->price = $form_data["price"];
        $new_comic->series = $form_data["series"];
        $new_comic->type = $form_data["type"];
        $new_comic->artists = $form_data["artists"];
        $new_comic->writers = $form_data["writers"];
        $new_comic->sale_date = $form_data["sale_date"];

        $new_comic->save();
        dump($form_data);
        // return to_route('comic.show', $new_comic);

    }

}
