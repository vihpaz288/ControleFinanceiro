<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
    use HasFactory;
    protected $fillable = [
        'IdUsers',
        'nome',
        'saldo'
    ];
    public function User()
    {
        return $this->belongsTo(User::class, 'IdUsers', 'id');
    }
    public function receitas()
    {
        return $this->hasMany(Receita::class, 'id');
    }
    public function despesas()
    {
        return $this->hasMany(despesas::class, 'id');
    }

}
