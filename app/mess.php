<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mess extends Model
{
    protected $table='messages';

    public $primaryKey= 'id';

    public $timestamps='true';
}
