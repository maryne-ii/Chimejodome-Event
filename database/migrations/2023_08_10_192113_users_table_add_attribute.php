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
            $table->string('profile_image')->default('https://static.vecteezy.com/system/resources/previews/005/544/718/original/profile-icon-design-free-vector.jpg')->nullable();
            $table->string('tel')->nullable();
            $table->interger('role')->default(2)->comment('0=admin,1=staff,2=student');
            $table->string('facebook_account')->nullable();
            $table->string('instagram_account')->nullable();
            $table->string('line_account')->nullable();
            $table->string('faculty')->nullable();
            $table->integer('year')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(columns: [
                'role',
                'tel',
                'role',
                'facebook_account',
                'instagram_account',
                'line_account',
                'faculty',
                'year'
            ]);
        });
    }
};
