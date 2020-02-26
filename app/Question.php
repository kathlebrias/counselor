<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{


    protected $fillable = [
    'id' ,
    'category_id' ,
    'type',
    'question',
    'counselor_id'
     ];


}
