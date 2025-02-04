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
    Schema::create('students', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('father_name');
        $table->string('mother_name');
        $table->date('dob');
        $table->string('gender');
        $table->string('phone');
        $table->string('class');
        $table->string('school');
        $table->string('subjects');
        $table->string('status')->default('Pending');
        $table->unsignedBigInteger('user_id');
        $table->timestamps();
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
