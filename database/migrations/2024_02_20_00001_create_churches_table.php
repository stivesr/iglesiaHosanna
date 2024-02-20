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
            $table->increments('idChurch')->primary();
            $table->integer('legalIdChurch');
            $table->string('nameChurch', 45)->nullable();
            $table->string('address', 45)->nullable();
            $table->string('phone', 15);
            $table->string('email', 45)->unique();
            $table->string('priest')->nullable()->unique();
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
