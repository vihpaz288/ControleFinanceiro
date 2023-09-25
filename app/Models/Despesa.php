<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Despesa extends Model
{
    use HasFactory;
    protected $fillable = [
        'IdContas',
        'data',
        'tipo',
        'valor',
        'descricao'
    ];
    public function Conta()
    {
        return $this->belongsTo(Conta::class, 'IdContas', 'id');
    }
}
