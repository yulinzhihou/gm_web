<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EventListAddFieldEventTypeId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('eventlist', function(Blueprint $table)
        {
            $table->integer('event_type_id',false,true)->nullable(false)->default(0)->after('event');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('eventlist','event_type_id')) {
            Schema::dropColumns('eventlist','event_type_id');
        }
    }
}
