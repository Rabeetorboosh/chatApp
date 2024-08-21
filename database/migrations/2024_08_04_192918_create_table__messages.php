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
        Schema::create('masseges', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger(column:'user_id');
            $table->foreign(columns:'user_id')->references(columns:'id')->on(table:'users');
            $table->unsignedBigInteger(column:'group_id');
            $table->foreign(columns:'group_id')->references(columns:'id')->on(table:'groups');
            $table->string(column:'messageText');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table__messages');
    }
};
