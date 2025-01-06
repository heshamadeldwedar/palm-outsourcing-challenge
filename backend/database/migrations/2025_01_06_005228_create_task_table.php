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

        Schema::create('task_statuses', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->enum('color', ['info', 'gray', 'failure', 'success', 'warning', 'indigo', 'dark'])->default('info');
            $table->timestamps();

        });

        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->unsignedBigInteger('status_id');
            $table->foreign('status_id')->references('id')->on('task_statuses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->dropForeign(['status_id']);
        });
        Schema::dropIfExists('task_statuses');
        Schema::dropIfExists('tasks');
    }
};
