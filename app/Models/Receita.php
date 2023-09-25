<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receita extends Model
{
    use HasFactory;
    protected $fillable = [
        'IdContas',
        'data',
        'valor',
        'descricao',
    ];

    public function conta()
    {
        return $this->belongsTo(Conta::class, 'IdContas', 'id');
    }
}
