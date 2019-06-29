<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'tentang';

    public function index()
    {
        DB::$table();
    }
}
