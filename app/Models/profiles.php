<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profiles extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'description', 'services', 'address', 'photo', 'visible',];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
