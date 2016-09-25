<?php

namespace App\Traits;
use DB;


trait DbTrait{
  /**
  * Liste une table en JSON
  */
  public static function list($table) {
     return DB::table($table)->get()->toJson;
  }


}
 ?>
