<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            
            
            $table->char('nom', 100);
            $table->char('adresse', 100);
            $table->char('phone', 100);
            $table->char('email', 100);
            
            $table->date('date_of_birth');

            $table->unsignedInteger('ville_id');

            //Esseyer avec cette ligne mais je n'arriverais pas a insert data avec le Faker pour les foreign keys
            // $table->foreignId('ville_id')->constrained()->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
