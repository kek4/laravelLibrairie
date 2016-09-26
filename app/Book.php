<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Book extends Model
{
    protected $table = "book";

    public static function getBookWithAuthor(){

      return Book::select('book.*', 'author.name as name', 'author.firstname as firstname')
                     ->join('author', 'book.author_id','=', 'author.id')
                     ->get();
      }

      /**
       * relation many to one between Book and Author
       * @return [type] [description]
       */
      public function author()
       {
           return $this->belongsTo('App\Author');
       }

      /**
       * Find all book in session
       * @return [type] [description]
       */
      public static function bookInSession($bookTable)
       {
         return DB::table('book')
                    ->whereIn('id', $bookTable)
                    ->get();
       }


}
