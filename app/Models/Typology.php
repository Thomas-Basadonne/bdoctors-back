<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typology extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'typology_id',];
    public function user()
    {

        return $this->belongsToMany(User::class);
    }
}
