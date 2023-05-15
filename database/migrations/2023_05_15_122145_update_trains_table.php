<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->string('code', 5)->change();
            $table->renameColumn('code', 'train_code');
            $table->renameColumn('wagon', 'wagons_number');
            $table->boolean('in_time')->change();
            $table->boolean('confirmed')->change();
            $table->renameColumn('in_time', 'on_time');
            $table->renameColumn('confirmed', 'cancelled');
            $table->date('departure_time')->change();
            $table->date('arrival_time')->change();
    
        });
      

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
