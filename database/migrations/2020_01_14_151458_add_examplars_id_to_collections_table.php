<?php

use App\Collection;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddExamplarsIdToCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('collections', function (Blueprint $table) {
            $table->unsignedBigInteger('exemplar_id')->default(1);
            $table->foreign('exemplar_id')->references('id')->on('exemplars');
        });

        $path = database_path('seeds/car_car_model.json');
        $modelCars = json_decode(file_get_contents($path),true);

        $modelMake = \App\Exemplar::all();

        for ($i=1; $i < count($modelMake); $i++) {
            for ($y=0; $y < count($modelCars); $y++) {

                if($modelCars[$y]["makeId"]==$modelMake[$i]->name_id) { 
                    $c = new Collection();

                    $c->name = $modelCars[$y]["name"];
                    $c->exemplar_id = $modelMake[$i]->id;
        
                    $c->save();
                }

            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('collections', function (Blueprint $table) {
            $table->dropForeign(['exemplar_id']);
            $table->dropColumn('exemplar_id');
        });
    }
}
