<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookType extends Model
{
    protected $table = 'booktype';

    protected $fillable = [
        'type_id',
        'type_name',
    ];
}
