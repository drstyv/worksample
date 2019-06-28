<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CcpBind extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ccp_bind', function (Blueprint $table) {
            $table->bigIncrements('courseid')->unsigned();
            $table->bigIncrements('compid')->unsigned();
            $table->bigIncrements('partid')->unsigned();
            $table->timestamps();

            $table->primary(['courseid','compid','partid'], 'ccp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ccp_bind');
    }
}
