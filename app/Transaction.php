<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'Description', 'Credit', 'Debit','Balance'
    ];
}