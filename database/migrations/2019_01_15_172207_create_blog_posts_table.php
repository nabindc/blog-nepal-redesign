<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('category_id')->unsigned();
            $table->string('title');
            $table->string('slug');
            $table->text('content',10000);
            $table->string('image');
            $table->string('date');
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('blog_posts', function (Blueprint $table){
            $table->dropForeign('blog_posts_category_id_foreign');
            });
        Schema::dropIfExists('blog_posts');
    
}
}