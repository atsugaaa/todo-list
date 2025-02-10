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
        Schema::create('users', function (Blueprint $table) {
            $table->string('name');
            $table->string('username');
            $table->string('password');
            $table->primary('username');
        });

        Schema::create('todos', function (Blueprint $table) {
            $table->string('todos_id');
            $table->string('todo');
            $table->boolean('is_completed')->default(false);
            $table->primary('todos_id');
            $table->string('user');
            $table->foreign('user')->references('username')->on('users')->onDelete('cascade');
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('todos');
        
        Schema::dropIfExists('sessions');
    }
};
