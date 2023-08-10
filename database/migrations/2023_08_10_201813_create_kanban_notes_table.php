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
        Schema::create('kanban_notes', function (Blueprint $table) {
            $table->id();
            $table->string('task_name');
            $table->string('writer');
            $table->integer('status')->comment('0 = toDo, 1 = InProgress, 2 = Check, 3 = Finish')->default(0);
            $table->string('description');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kanban_notes');
    }
};
