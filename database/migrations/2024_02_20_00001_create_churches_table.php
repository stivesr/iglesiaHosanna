<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('churches', function (Blueprint $table) {
            $table->id('idChurch');
            $table->string('identification')->unique();
            $table->string('name')->nullable(false);
            $table->string('location')->nullable(false);
            $table->string('phone');
            $table->string('email');
            $table->string('image');

            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('churches');
    }
};
