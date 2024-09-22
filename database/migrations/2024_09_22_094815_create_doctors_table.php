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
        // Create doctors table, and this doctor table is refer to the user table
        //when a new doctor registered, the doctor details will be created as well
        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('doc_id')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
