<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "name",
        "scopes",
        "redirect_uri",
        "client_id",
        "client_secret"

    ];


    public function scopes()
    {
        return $this->belongsToMany(Scope::class);

    }

}