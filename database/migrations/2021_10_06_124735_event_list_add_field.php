<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EventListAddField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('eventlist', function (Blueprint $table) {
            $table->string('param7',60)->default('')->comment('参数7')->after('param6');
            $table->string('param8',60)->default('')->comment('参数8')->after('param7');
            $table->string('param9',60)->default('')->comment('参数9')->after('param8');
            $table->string('param10',60)->default('')->comment('参数10')->after('param9');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        for($i = 6; $i <= 10; $i++) {
            if (Schema::hasColumn('eventlist','param'.$i)) {
                Schema::dropColumns('eventlist','param'.$i);
            }
        }
    }
}
