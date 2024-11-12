<?php

namespace My\Portfolio\Models;

use My\Portfolio\Base\Model;

class User extends Model
{
      protected $table = 'users';

      public function get()
      {

            $get = $this->fetchAll("SELECT * FROM {$this->table}");
            return $get;
      }
}
