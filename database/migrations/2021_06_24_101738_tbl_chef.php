<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblChef extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_chef', function (Blueprint $table) {
            $table->Increments('chef_id');
            $table->string('chef_name');
            $table->text('chef_desc');
            $table->string('chef_image');
            $table->integer('chef_fb');
            $table->integer('chef_tiw');
            $table->integer('chef_gg');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_chef');
    }
}
