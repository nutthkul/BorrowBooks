<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    protected $table = 'borrow';

    protected $fillable = [
        'borrow_date',
        'return_date',
        'lib_id',
        'borrower_id',
        'status',
    ];
}
