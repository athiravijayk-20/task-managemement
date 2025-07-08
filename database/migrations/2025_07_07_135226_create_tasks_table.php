<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up()
{
    Schema::create('tasks', function (Blueprint $table) {
        $table->id();

        $table->foreignId('project_id')->constrained()->onDelete('cascade');

        $table->foreignId('assigned_to')->nullable()->constrained('users')->onDelete('set null'); // Who will do the task

        $table->foreignId('assigned_by')->nullable()->constrained('users')->onDelete('set null'); // Who assigned the task

        $table->string('title');
        $table->text('description')->nullable();

        $table->enum('priority', ['low', 'medium', 'high'])->default('medium');
        $table->enum('status', ['pending', 'in_progress', 'completed'])->default('pending');
        $table->date('due_date')->nullable();

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
};
