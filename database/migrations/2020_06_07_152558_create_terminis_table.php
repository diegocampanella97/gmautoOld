<?php

use App\Termini;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTerminisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terminis', function (Blueprint $table) {
            $table->id();
	    $table->longText('testoAnnuncio')->nullable();
            $table->timestamps();
        });

        $termini = new Termini();
        $termini->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('terminis');
    }
}
