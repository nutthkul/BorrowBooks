<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Librarian extends Model
{
    protected $table = 'librarian';

    protected $fillable = [
        'lib_name',
        'username',
        'password',
    ];
}
