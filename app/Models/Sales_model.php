<?php

namespace App\Models;

use App\Http\Controllers\Sales_controller;
use App\Http\Controllers\User_controller;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales_model extends Model
{
    use HasFactory;
    protected $table = 'sales';

    
    public function useres()
    {
        // return $this->belongsTo(User_controller::class, 'user_id', 'id', 'users');
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
