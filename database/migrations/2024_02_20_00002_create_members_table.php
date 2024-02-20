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
        Schema::create('members', function (Blueprint $table) {
            $table->id('idMember');
            $table->string('identification')->unique();
            $table->string('firstName')->nullable(false);
            $table->string('lastName')->nullable(false);
            $table->date('birthdate');
            $table->string('address');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            
            $table->timestamps();

            $table->unsignedBigInteger('idChurch');

            $table->foreign('idChurch')
                ->references('idChurch')
                ->on('churches')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
