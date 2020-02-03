<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    // table name
    protected $tables  = 'tweets';

    // primary key
    public $primaryKey = 'id';

    // timestamps
    public $timestamps = true;

}
