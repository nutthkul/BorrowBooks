<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RunBook extends Model
{
    protected $table = 'run_book';

    protected $fillable = [
        'run_book_id',
        'book_id',
    ];
}
