<?php

use App\Exemplary;
use App\Preparation;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreparationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preparations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('idExt')->nullable();
            $table->unsignedBigInteger('exemplaries_id');
            $table->foreign('exemplaries_id')->references('id')->on('exemplaries');
            $table->timestamps();
        });

//        foreach (Exemplary::all() as $modelloSingolo) {
//
//            $dataAllestimenti = json_decode(utf8_encode(file_get_contents('https://www2.subito.it/templates/api/carversions.js?v=5&carbrand='.$modelloSingolo->producer()->first()->idExt.'&carmodel='.$modelloSingolo->idExt)),true);
//
//            foreach ($dataAllestimenti as $allestimentoVeicolo) {
//                $allestimento = new Preparation();
//                $allestimento->name = $allestimentoVeicolo['value'];
//                $allestimento->idExt = $allestimentoVeicolo['id'];
//                $allestimento->exemplaries_id = $modelloSingolo->id;
//                $allestimento->save();
//            }
//
//        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('preparations');
    }
}
