<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\DB;

class Paciente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 
        'idade', 
        'sexo', 
        'dataDeNascimento', 
        'estadoCivil', 
        'numeroDeFilhos',
        'telefone',
        'email',
        'cidade',
        'cep',
        'endereco',
        'doencasRegressas',
        'doencaAtual',
        'queixasPrincipais',
        'processosCirurgicosMedicamentos',
        'atvFisica',
        'motivoProcura',
        'profissao',
        'setorAreaTrabalho',
        'funcao',
        'tempoExerce',
        'postura',
        'nomeAluno',
        'anotacaoAluno',
    
    ];

    public function scopeFilter($query, array $filters)    
    {
        
        if ($filters['search'] ?? false) {
            $query->where('nome', 'like', '%' . request('search') . '%')
                -> orwhere('email', 'like', '%' . request('search') . '%')
                -> orwhere('telefone', 'like', '%' . request('search') . '%')
                -> orwhere('nomeAluno', 'like', '%' . request('search') . '%')
                -> orwhere('created_at','like','%' .request('search').'%');
        }

        
       

    }
    
}
