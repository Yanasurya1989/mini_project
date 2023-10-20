<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales_model extends Model
{
    use HasFactory;
    protected $table = 'sales';

    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
