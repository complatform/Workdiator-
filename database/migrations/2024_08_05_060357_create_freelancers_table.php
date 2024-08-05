<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PhpParser\Node\NullableType;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('freelancers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('experiance');
            $table->json('certificate')->nullable();
            $table->string('educational_status');
            $table->json('college')->nullable();
            $table->string('graduation_year')->nullable();
            $table->json('portfolio')->nullable();
            $table->unsignedBigInteger('skill_list_id');
            $table->json('skill');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('freelancers');
    }
};
