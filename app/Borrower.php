<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrower extends Model
{
    protected $table = 'borrower';

    protected $fillable = [
        'borrower_id',
        'borrower_name',
        'borrower_tel',
    ];
}
