<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todos extends Model
{
    protected $table = 'todos';
    protected $primaryKey = 'todos_id';
    public $timestamps = false;

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'todos_id',
        'todo',
        'is_completed',
    ];

    public function user()
    {
        return $this->belongsTo(Users::class, 'username', 'user'); // Relasi ke User
    }
}
