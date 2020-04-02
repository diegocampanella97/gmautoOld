<?php

use App\Exemplar;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImgPathToExemplarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('exemplars', function (Blueprint $table) {
            $table->string('imgPath')->nullable();
        });

        foreach (Exemplar::all() as $exemplar){
            $exemplar->imgPath = $exemplar->name_id . '.svg';
            $exemplar->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('exemplars', function (Blueprint $table) {
            $table->dropColumn('imgPath');
        });
    }
}
