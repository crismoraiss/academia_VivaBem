<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as  Authenticateble;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

// api aluno
class Usuario extends Authenticateble
{
    use HasFactory, Notifiable, HasApiTokens;

    protected $table = 'usuarios';
    // nome da tabela

    protected $primaryKey = 'id_usuario';
    protected $hidden = ['senha'];
    protected $fillable = ['nome', 'email', 'senha', 'tipo_usuario_id', 'tipo_usuario_type'];

    public function tipo_usuario(){
        return $this->morphTo('tipo_usuario', 'tipo_usuario_type', 'tipo_usuario_id');

        // os ultimos tipo é de acordo com o nome do banco
    }
}


// essa parte é referente ao banco de dados, onde pegamos o nome da tabela do usuarios do meu banco o 'id', e o 'tipo_usuario', 'tipo_usuario_type',
// 'tipo_usuario_id', que é de acordo com a minha tabela
