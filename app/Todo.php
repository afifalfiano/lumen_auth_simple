<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as  AuthenticableTrait;
// use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
// use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class Todo extends Model
{
    protected $table = 'todo';
    protected $fillable = ['todo', 'category', 'user_id', 'description'];

}
