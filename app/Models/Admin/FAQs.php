<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class FAQs extends Model
{
    protected $table = "faqs";

    protected $primaryKey = "id";

    protected $fillable = [
        "question",
        "answer",
    ];
}
