<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('apps', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->longtext('scopes');
            $table->longtext('redirect_uri');
            $table->longtext('client_id');
            $table->longtext('client_secret');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate("cascade");

        });
    }











    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apps');
    }
};