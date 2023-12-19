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
            $table->id();
            $table->string('fullname',50);
            $table->string('email',100);
            $table->string('phone_number',20)->nullable();
            $table->string('password',32);
            $table->unsignedBigInteger('roles_id')->nullable();
            $table->integer('deleted')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('roles_id')->references('id')->on('roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
