<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EventTypeAddField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('event_type', function (Blueprint $table) {
            $table->string('param_name_1',60)->default('')->comment('参数1名称')->after('param_num');
            $table->string('param_name_2',60)->default('')->comment('参数2名称')->after('param_name_1');
            $table->string('param_name_3',60)->default('')->comment('参数3名称')->after('param_name_2');
            $table->string('param_name_4',60)->default('')->comment('参数4名称')->after('param_name_3');
            $table->string('param_name_5',60)->default('')->comment('参数5名称')->after('param_name_4');
            $table->string('param_name_6',60)->default('')->comment('参数6名称')->after('param_name_5');
            $table->string('param_name_7',60)->default('')->comment('参数7名称')->after('param_name_6');
            $table->string('param_name_8',60)->default('')->comment('参数8名称')->after('param_name_7');
            $table->string('param_name_9',60)->default('')->comment('参数9名称')->after('param_name_8');
            $table->string('param_name_10',60)->default('')->comment('参数10名称')->after('param_name_9');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        for($i = 1; $i <= 10; $i++) {
            if (Schema::hasColumn('event_type','param_num_'.$i)) {
                Schema::dropColumns('event_type','param_num_'.$i);
            }
        }
    }
}
