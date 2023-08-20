<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('header')->nullable();
            $table->foreignIdFor(User::class)->nullable()->comment('budget for staff');
            $table->string('detail')->nullable();
            $table->string('poster')->comment('image_path')->default("storage/1692471072.jpg");
            // $table->string('poster')->comment('image_path')->default('event_images/simple.jpg');
            $table->string('bank_account_number')->nullable();
            $table->integer('participant_total')->default(0);
            $table->integer('organizer_total')->default(0);
            $table->float('budget')->nullable();
            $table->string('location')->nullable();
            $table->datetime('start_date')->nullable();
            $table->datetime('end_date')->nullable();
            $table->integer('status')->default(0)->comment('0=not yet 1=complete'); 



            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
