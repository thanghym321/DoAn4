<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phanhoi extends Model
{
    use HasFactory;
    protected $table='phan_hoi';
    protected $primaryKey = 'id_phan_hoi';
}
