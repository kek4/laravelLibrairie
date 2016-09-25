<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Author;
use App\Book;
use Validator;
use Carbon\Carbon;

class BookController extends Controller
{

  /**
   * Affiche la vue de la liste des livres
   */
   public function toList(){
     return view('book/list');
   }

  /**
   * Liste des livres retournée en JSON
   */
  public function listJson(){
    $list = Book::all();
    return $list->toJson();
  }

  /**
   * Création d'un nouveau livre
   */
  public function add(Request $request){

    $authors = Author::all();

    $validator = Validator::make($request->all(), [
    'title' => 'required|regex:/[a-z\-\ ]{3,}/i|unique:book',
    'price' => ['required','regex:/^[0-9]+[,.][0-9]{2}$/i'],
    'isbn' => ['required','regex:/^([0-9][-][0-9]{2}[-][0-9]{6}[-][0-9])|([0-9]{10})$/i'], //isbn 10 (ancien) ou isbn 13 (nouveau)
    'ean' => ['required','regex:/^[0-9]{3}[-][0-9]{10}$/i'],
    'cover' => ['required','active_url'],
    'author_id' => 'required|exists:author,id',
    'editor' => 'required',
    'release_date' => 'required|date_format:d-m-Y',
    'digital' => 'required|in:1,0',
  ],
  [
    'required' => 'Le champ :attribute est requis',
    'date_format' => "Le format de date doit être dd-mm-aaaa",
  ]);
    if ($validator->fails() && $request->isMethod('post')) {
      return redirect()->route('book.add')->withErrors($validator)->withInput();
    }elseif ($request->isMethod('post')) {
       $book = new Book();
       $book->title = $request->title;
       $book->price = $request->price;
       $book->isbn = $request->isbn;
       $book->ean = $request->ean;
       $book->cover = $request->cover;
       $book->author_id = $request->author_id;
       $book->editor = $request->editor;
       $book->release_date = Carbon::parse($request->release_date);
       $book->shop = $request->shop;
       $book->digital = $request->digital;
       $book->save();
       return redirect()->route('book.list')->with('success','Nouveau livre enregistré');
    }
    return view('book/add', ['authors' => $authors]);
  }

 }
