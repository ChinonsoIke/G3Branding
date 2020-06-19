<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string("title")->unique();
            $table->string('description',500)->nullable();
            $table->string('caption');
            $table->string('permalink')->unique();
            $table->string('image')->nullable();
            $table->string('audio')->nullable();
            $table->string("video")->nullable();
            $table->string("document")->nullable();
            $table->string("author")->nullable();
            $table->string("p_content");
            $table->string("has_parent")->nullable();
            $table->string("parent_id")->nullable();
            $table->string("target")->nullable();
            $table->enum("status",array('published','drafted','unpublished','archived'))->default('published');
            $table->boolean("featured")->nullable();
            $table->string("meta_title")->nullable();
            $table->string("meta_description")->nullable();
            $table->string("meta_keyword")->nullable();
            $table->string("type")->nullable();
            $table->string("post_meta")->nullable();
            $table->enum("post_type",array('page','post','post category','menu','slider','page block','event','event category'));
            $table->date("start_date")->nullable();
            $table->date("end_date")->nullable();
            $table->time("start_time")->nullable();
            $table->time("end_time")->nullable();
            $table->string("frequency")->nullable();
            $table->string("venue")->nullable();
            $table->string("address")->nullable();
            $table->string("created_by")->nullable();
            $table->enum("view_status",array('visible','hidden'))->default('visible');
            $table->integer("sort_order")->nullable();
            $table->boolean("enabled")->default(0);
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
        Schema::dropIfExists('posts');
    }
}
