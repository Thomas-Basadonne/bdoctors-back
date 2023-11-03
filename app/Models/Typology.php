<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typology extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    // public function user()
    // {

    //     return $this->belongsToMany(User::class, 'user_typology')->withPivot('user_id', 'typology_id');
    // }
    public function profiles()
    {
        return $this->belongsToMany(Profile::class);
    }
}
