<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Author;
use Validator;
use Carbon\Carbon;

class AuthorController extends Controller
{
  /**
   * Affiche la vue de la liste des auteurs
   */
   public function toList(){
     return view('author/list');
   }

  /**
   *Liste des auteurs retournée en JSON
   */
  public function listJson(){
    $list = Author::all();
    return $list->toJson();
  }

  /**
   * Création d'un nouvel auteur
   */
  public function add(Request $request){

    $validator = Validator::make($request->all(), [
    'name' => 'required',
    'firstname' => 'required',
    'picture' => ['required','active_url'],
    'city' => 'required',
    'category' => 'required',
    'biography' => 'required',
    'birthday' => 'required|date_format:d-m-Y',
    'deathday' => 'date_format:d-m-Y',
    'gender' => 'required|in:1,0',
  ],
  [
    'required' => 'Le champ :attribute est requis',
    'date_format' => "Le format de date doit être dd-mm-aaaa",
  ]);
    if ($validator->fails() && $request->isMethod('post')) {
      return redirect()->route('author.add')->withErrors($validator)->withInput();
    }elseif ($request->isMethod('post')) {
      if ($request->gender) {
        $successMsg = 'Nouvel auteur enregistré';
      }else{
        $successMsg = 'Nouvelle auteur enregistrée';
      }
       $author = new Author();
       $author->name = $request->name;
       $author->firstname = $request->firstname;
       $author->picture = $request->picture;
       $author->city = $request->city;
       $author->category = $request->category;
       $author->biography = $request->biography;
       $author->birthday = Carbon::parse($request->birthday);
       $author->deathday = Carbon::parse($request->deathday);
       $author->gender = $request->gender;
       $author->save();
       return redirect()->route('author.list')->with('success',$successMsg);
    }
    return view('author/add');
  }

  /**
   * Delete an author
   * @param  Article $id [description]
   * @return [type]      [description]
   */
    public function delete(Author $id){

     $id->delete();
     return $this->listJson();
  }

}
