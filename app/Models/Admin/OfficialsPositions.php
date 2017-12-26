<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class OfficialsPositions extends Model
{
    protected $table = "officials_positions";

    protected $primaryKey = "id";

    protected $fillable = [
        "name",
        "disk_name",
        "primary",
    ];
}
