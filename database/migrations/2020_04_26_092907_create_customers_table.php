<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    // "car_id" => "512"
    // "nome" => "Diego"
    // "cognome" => "Campanella"
    // "residenza" => "Dolore repudiandae m"
    // "email" => "diegocampanella97@gmail.com"
    // "telefono" => "3493346969"


    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('cognome');
            $table->string('residenza');
            $table->string('email')->unique();
            $table->unsignedBigInteger('telefono');
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
        Schema::dropIfExists('customers');
    }
}
