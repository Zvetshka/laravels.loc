<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    // Поля модели (обязательные создания записи)
    protected $fillable = ['name', 'code'];
    // Связь 1:M
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
