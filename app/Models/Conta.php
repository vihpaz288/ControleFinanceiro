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
    public function Conta()
    {
        return $this->hasMany(Conta::class, 'IdUsers', 'id');
    }
}
