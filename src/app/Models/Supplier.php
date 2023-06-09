<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = ['id_supplier', 'nama_supplier', 'alamat_supplier'];
    protected $table = 'supplier';
    public $timestamps = false;
}
