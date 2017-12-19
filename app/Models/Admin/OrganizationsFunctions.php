<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class OrganizationsFunctions extends Model
{
    protected $table = "organization_functions";

    protected $primaryKey = "id";

    protected $fillable = [
        "name",
        "objective"
    ];
}
