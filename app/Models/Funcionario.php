<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{

    use HasFactory;
    protected $table = 'funcionario';
    protected $primaryKey = 'idFuncionario';



    // Informa ao Eloquent quais são as colunas personalizadas para created_at e updated_at
    const CREATED_AT = 'criadoEm';
    const UPDATED_AT = 'atualizadoEm'; 

    public function usuario(){
        return $this->morphOne(Usuario::class, 'tipo_usuario');
    }
}

// essa parte é referente ao banco de dados, com a informações de la, principalmente com o primaryKey que é o 'id' da tabela do meu banco, e o tipo usuario
