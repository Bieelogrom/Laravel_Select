<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Servicos extends Model
{
    protected $fillable = ['nomeCliente', 'dataEntrada', 'dataSaida', 'telefoneContato', 'descApp', 'descRelat', 'Capa', 'Chip', 'Operadoras', 'caboUsb', 'Cartao' ];
  
}


