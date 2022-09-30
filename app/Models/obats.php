<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class obats extends Model
{
    protected $table = 'obats';
    protected $primaryKey = 'id_obat';
    protected $foreignKey = 'id_supplier';
    protected $fillable = ['nama_obat', 'harga_jual', 'harga_beli','stok'];
}
