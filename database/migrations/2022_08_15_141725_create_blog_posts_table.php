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

            //ID категории к которой относится данная статья
            $table->integer('category_id')->unsigned();

            //ID автора статьи
            $table->integer('user_id')->unsigned();

            //Название статьи в транслите title для создания человекопонятного URL
            $table->string('slug')->unique();

            //Заголовок статьи
            $table->string('title');

            //Выдержка из статьи (часть статьи для предпросмотра)
            $table->text('excerpt')->nullable();

            //Текст статьи
            $table->text('content_raw');

            //Текст статьи 'content_raw' в html виде при созданиии в редакторе markdown
            $table->text('content_html');

            //Признак публикации статьи
            $table->boolean('is_published')->default(false);

            //Дата публикации статьи
            $table->timestamp('published_at')->nullable();

            // См. CreateBlogCategoriesTable
            $table->timestamps();

            // См. CreateBlogCategoriesTable
            $table->softDeletes();

            //Создание связей

            //Связь с таблицей 'users'
            $table->foreign('user_id')->references('id')->on('users');

            //Связь с таблицей 'blog_categories'
            $table->foreign('category_id')->references('id')->on('blog_categories');

            //Индексирование поля 'is_published'
            $table->index('is_published');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_posts');
    }
}
