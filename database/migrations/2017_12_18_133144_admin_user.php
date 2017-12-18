<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Models\User;

class AdminUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        User::firstOrCreate([
            "name"     => "Admin",
            "email"    => env("ADMIN_EMAIL"),
            "password" => bcrypt(env("ADMIN_PASSWORD"))
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
