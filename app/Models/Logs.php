<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Logs extends Model
{
    protected $table = "Logs";

    protected $primaryKey = "log_id";

    protected $fillable = [
        "description"
    ];
}
