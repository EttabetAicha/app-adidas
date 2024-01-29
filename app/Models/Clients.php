<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;
    protected $table = 'clients';
    protected $primaryKey = 'id_client';
    protected $fillable = ['client_name', 'email', 'credit_card','address'];
}
