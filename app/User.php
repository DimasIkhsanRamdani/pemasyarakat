<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [
         'name', 'email', 'password',
     ];


    protected $hidden = [
        'password', 'remember_token',
    ];
    public function admin()
    {
      return $this->hasMany('App\Admin');
    }
    public function petugas()
    {
      return $this->hasMany('App\Petugas');
    }
    public function masyarakat()
    {
      return $this->hasMany('App\Masyarakat');
    }
}
