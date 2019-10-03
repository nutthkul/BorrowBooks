<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    protected $table = 'borrow';

    protected $fillable = [
        'borrow_date',
        'return_date',
        'borrow_id',
        'lib_id',
        'borrower_id',
        'status',
    ];
}
