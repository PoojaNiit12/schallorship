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
        Schema::create('documentdets', function (Blueprint $table) {
            $table->id();

            $table->string('resultstatus');
$table->string('exams');
$table->string('board');
$table->unsignedSmallInteger('passingyear');
$table->unsignedSmallInteger('crmarkes');
$table->unsignedSmallInteger('maxmarkes');
$table->decimal('persentage', 5, 2);
$table->string('examroll');
$table->string('disqualify'); // Change data type to unsignedTinyInteger
$table->text('details');
$table->string('photo');
$table->string('sign');
$table->timestamps();



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documentdets');
    }
};
