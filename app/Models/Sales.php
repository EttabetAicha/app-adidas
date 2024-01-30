<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;
    protected $fillable = ['product_id', 'client_id', 'status'];

    public function product()
    {
        return $this->belongsTo(Products::class, 'product_id');
    }

    public function client()
    {
        return $this->belongsTo(Clients::class , 'client_id');
    }
}
