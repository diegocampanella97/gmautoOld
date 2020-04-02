<?php

use App\Exemplary;
use App\Producer;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExemplariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exemplaries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('img_Path')->nullable();
            $table->string('idExt')->nullable();
            $table->unsignedBigInteger('producers_id')->default(207);
            $table->foreign('producers_id')->references('id')->on('producers');
            $table->timestamps();
        });

//        foreach(Producer::all() as $produttore){
//            $produttoreVeicolo = "https://www2.subito.it/templates/api/carmodels.js?v=5&carbrand=$produttore->idExt";
//            $dataModelliAuto = json_decode(utf8_encode(file_get_contents($produttoreVeicolo)),true);
//
//            foreach($dataModelliAuto as $modello) {
//                $exemplaries = new Exemplary();
//
//                $exemplaries->name = $modello['value'];
//                $exemplaries->idExt = $modello['id'];
//                $exemplaries->producers_id = $produttore->id;
//
//                $exemplaries->save();
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
        Schema::dropIfExists('exemplaries');
    }
}
