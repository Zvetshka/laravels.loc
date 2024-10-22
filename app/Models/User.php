<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;
    // Поля модели (обязательные для создания записи)
    protected $fillable = ['surname', 'name', 'patronymic', 'sex', 'birthday', 'login', 'email', 'api_token', 'password', 'role_id'];
    // Скрытие атрибутов модели
    protected $hidden = [
        'password',
        'api_token',
    ];
    //Указание атрибутов, которые должны быть преобразованы при сохранении и извлечении из БД
    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }
    // Связь M:1
    public function role() {
        return $this->belongsTo(Role::class);
    }
}
