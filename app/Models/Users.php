<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Users extends Authenticatable {
    use AuthenticableTrait;
    use Notifiable;

    protected $primaryKey = "id_users";
    protected $table = "users";
    protected $fillable = ['username', 'email', 'password'];
    protected $hidden = ['password'];

    /* Relation Has Many Level */
    public function absen()
    {
        return $this->hasMany(Absen::class);
    }
}