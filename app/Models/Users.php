<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends Authenticatable
{
    protected $table = 'users';
    protected $primaryKey = 'username';

    protected $keyType = 'string';

    protected $guard = 'users';

    protected $hidden = ['password',];

    protected $fillable = [
        'name', 'username', 'password',
    ];

    public $incrementing = false;

    public $timestamps = false;

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }

    public function getAuthPassword() {
        return $this->password;
    }

    public function todos()
    {
        return $this->hasMany(Todos::class, 'user', 'username');
    }
}
