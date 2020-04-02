<?php

use App\Grade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });

//        $path = database_path('seeds/grade-category.json');
//        $models = json_decode(file_get_contents($path),true);
//
//
//        for ($i=0; $i < count($models); $i++) {
//            $cat= new Grade();
//            $cat->name= $models[$i]["value"];
//            $cat->save();
//        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grades');
    }
}
