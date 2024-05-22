<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
<<<<<<< HEAD
            $table->string('email')->nullable();
            $table->string('google_id');
            $table->string('google_token')->nullable();
            $table->string('google_refresh_token');
=======
            $table->string('google_id')->nullable();
            $table->string('google_token')->nullable();
            $table->string('google_refresh_token')->nullable();
>>>>>>> 91941c7 (feat: convert to laravel 10)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
<<<<<<< HEAD
            $table->dropColumn('email');
=======
>>>>>>> 91941c7 (feat: convert to laravel 10)
            $table->dropColumn('google_id');
            $table->dropColumn('google_token');
            $table->dropColumn('google_refresh_token');
        });
    }
};
