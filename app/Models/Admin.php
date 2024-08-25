<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
//use Illuminate\Database\Eloquent\SoftDeletes;   

class Admin extends Authenticatable
{
    use HasFactory;
    protected $guard = 'admin';
    // use HasFactory, SoftDeletes;

    // protected $fillable = [
    //     'name', 'email', 'password', 'is_admin', 'status', 'last_login_at'
    // ];

    // protected $casts = [
    //     'last_login_at' => 'datetime',
    //     'is_admin' => 'boolean',
    //     'status' => 'boolean'
    // ];

    // protected $hidden = [
    //     'password',
    // ];

    
    // public function setPasswordAttribute($value)// şifreyi modelde ayarlamak için bir yardımcı metod
    // {
    //     $this->attributes['password'] = bcrypt($value);
    // }
}
