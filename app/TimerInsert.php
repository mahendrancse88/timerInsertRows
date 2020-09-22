<?php
namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class TimerInsert extends Model
{
  
   // $table = 'timer_insert';
    protected $table = 'timer_insert';
    protected $fillable = [
        'gerenter_key'
    ];

}
?>