<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class VisionMission extends Model
{
    protected $table = "vision_mission";

    protected $primaryKey = "id";

    protected $fillable = [
        "name",
        "content"
    ];
}
