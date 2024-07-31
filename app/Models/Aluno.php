<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;
    protected $primaryKey = 'idAlunoo';

     // Informa ao Eloquent quais são as colunas personalizadas para created_at e updated_at
     const CREATED_AT = 'criado_em_Alunoo';
     const UPDATED_AT = 'atualizado_em_Alunoo';

    public function usuario(){
        return $this->morphOne(Usuario::class, 'tipo_usuario');
    }

    // de acordo com o nome q ta no banco
}

// essa parte é referente ao banco de dados, com a informações de la, principalmente com o primaryKey que é o 'id' da tabela do meu banco, e o tipo usuario
    