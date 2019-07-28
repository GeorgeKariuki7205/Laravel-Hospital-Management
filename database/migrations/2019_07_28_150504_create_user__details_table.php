<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user__details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('First_Name');
            $table->string('Last_Name');
            $table->string('Sur_Name');
            $table->Integer('Phone_Number');
            $table->string('email')->unique();
            $table->string('Residence');
            $table->Integer('Birth_Certificate_Number')->unique();
            $table->Integer('KRA_Number');
            $table->Integer('NHIF_Number');
            $table->date('Date_Of_Birth');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user__details');
    }
}
