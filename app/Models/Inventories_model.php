<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventories_model extends Model
{
    use HasFactory;
    protected $table = 'inventories';
    protected $primaryKey = 'id'; 
    protected $fillable = [
        'code',
        'name',
        'price',
        'stock',
    ];
}
