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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('nameofscholarship');
            $table->string('name');
            $table->string('fathername');
            $table->string('mothername');
            $table->string('examcentre');
            $table->string('caddress');
            $table->string('mobilen0');
            $table->string('paddress');
            $table->string('email');
            $table->string('dob');
            $table->string('adharno');
            $table->string('hsmarksheetmatric');
            $table->string('hsmarksheet');
            $table->string('nationality');
            $table->string('gender');
            $table->string('singlegirlchild');
            $table->string('applyingfor');
            $table->string('physicallychallenged');
            $table->string('myfile');
            $table->string('category');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
