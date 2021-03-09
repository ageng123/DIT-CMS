<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PostMigrations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('posts', function(Blueprint $tb){
            $tb->bigIncrements('pid');
            $tb->integer('post_author')->nullable();
            $tb->string('post_title', 255)->nullable();
            $tb->integer('post_status')->nullable();
            
            $tb->timestamp('created_at')->nullable();
            $tb->timestamp('updated_at')->nullable();
            $tb->timestamp('deleted_at')->nullable();
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
}
