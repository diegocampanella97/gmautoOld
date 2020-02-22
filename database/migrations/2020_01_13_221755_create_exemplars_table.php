<?php

use App\Exemplar;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExemplarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exemplars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('name_id');
            $table->timestamps();
        });

        $path = database_path('seeds/car_car_make.json');
        $models = json_decode(file_get_contents($path),true);



        for ($i=0; $i < count($models); $i++) { 
            $m = new Exemplar();

            $m->name = $models[$i]["name"];
            $m->name_id = $models[$i]["id"];

            $m->save();
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exemplars');
    }
}
