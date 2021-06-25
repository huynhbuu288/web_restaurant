<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblBlogSingle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_blog_single', function (Blueprint $table) {
            $table->Increments('blog_single_id');
            $table->string('blog_single_date');
            $table->string('blog_single_title');
            $table->string('blog_single_name');
            $table->string('blog_single_time');
            $table->string('blog_single_text');
           
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
        Schema::dropIfExists('tbl_blog_single');
    }
}
