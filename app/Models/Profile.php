<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'description', 'services', 'address', 'photo', 'visible',];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function typologies()
    {
        return $this->belongsToMany(Typology::class);
    }
}
