<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userinfos extends Model
{
    public function verifyUser()
    {
      return $this->hasone('App\VerifyUser');
    }
}