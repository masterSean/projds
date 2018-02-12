<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Programs extends Model
{
    protected $primaryKey = "id";

    protected $fillable = [
        "title",
        "description",
        "image",
    ];
}
