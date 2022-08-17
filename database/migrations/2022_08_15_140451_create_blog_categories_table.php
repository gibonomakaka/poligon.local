<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_categories', function (Blueprint $table) {
            $table->increments('id');

            // ID родительской ктегории.
            $table->integer('parent_id')->unsigned()->default(0);

            // Название категории в транслите title для создания человекопонятного URL
            $table->string('slug')->unique();

            // Заголовок категории
            $table->string('title');

            // Описание категории
            $table->text('description')->nullable();

            // Создаются 2 поля: created_at (дата создания) и updated_at (дата изменения)
            $table->timestamps();

            // Создается поле deleted_at (признак, что запись была удалена. Физически запись остается в БД).
            // Если deleted_at = 1 то не будет учитываться в запросах.
            $table->softDeletes();

            //Связь с таблицей 'blog_categories'
            $table->foreign('parent_id')->references('id')->on('blog_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_categories');
    }
}
