<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

// Modelo User que representa a tabela de usuários e gerencia a autenticação.
class User extends Authenticatable
{
    // Traits que adicionam funcionalidades de fabricas de testes (Factories) e notificações.
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            // Converte o campo para uma instância de Carbon para fácil manipulação de datas.
            'email_verified_at' => 'datetime',
            // Garante que o atributo 'password' seja automaticamente hasheado ao ser definido.
            'password' => 'hashed',
        ];
    }
}
