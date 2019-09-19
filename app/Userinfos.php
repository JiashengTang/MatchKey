<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userinfos extends Model
{
    protected $table = 'userinfos';
    protected $primaryKey='id';
    public $timestamps = true;
    protected $guarded=[];
}
