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
        Schema::create('lead_forms', function (Blueprint $table) {
            $table->id();
            $table->string('unique_number')->unique();
            $table->string('name',50);
            $table->string('email',50);
            $table->string('phn',50);
            $table->string('peoples',50);
            $table->string('rooms',50);
            $table->string('bed',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lead_forms');
    }
};
