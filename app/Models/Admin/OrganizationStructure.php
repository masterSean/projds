<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class OrganizationStructure extends Model
{
    protected $table = "organization_structures";

    protected $primaryKey = "id";

    protected $fillable = [
        "name",
        "file_path",
        "primary"
    ];
}
