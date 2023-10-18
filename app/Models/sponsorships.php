<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sponsorships extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'sponsorships_id',];
    public function user()
    {

        return $this->belongsToMany(User::class);
    }
}
