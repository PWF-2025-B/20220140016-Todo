<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = [
        'tittle',
        'user_id',
        'is_complete'
    ];
    
    public function user()
    {
        return $this->belongTo(User::class);
    }
}
