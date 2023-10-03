<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    //Schema for the "courses" table
    public function up(): void
    {
        Schema::create('courses', function(Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->timestamp();
        });
    }

    //Schema for the "instructors" table
    public function down(): void
    {
        Schema::create('instructors', function(Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamps();
        });
}
