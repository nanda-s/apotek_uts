<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supply extends Model
{
    protected $table = 'supply';
    protected $primaryKey = 'id_supply';
    protected $fillable = ['id_obat', 'jumlah-obat', 'harga_beli','id_supplier'];
}
