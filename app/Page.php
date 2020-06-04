<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public static function getUsers()
    {
        $records = \DB::table('users')
          ->select('username', 'name', 'gender', 'email')
          ->orderBy('id', 'asc')->get()->toArray();

        return $records;
    }
}
