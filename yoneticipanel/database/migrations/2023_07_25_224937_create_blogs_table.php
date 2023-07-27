<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('blog_title')->nullable();
            $table->text('blog_description')->nullable();
            $table->string('blog_tags')->nullable();
            $table->longText('blog_content')->nullable();
            $table->string('blog_image')->nullable();
            $table->integer('blog_author')->nullable();
            $table->string('blog_slug')->nullable();
            $table->integer('blog_categoryId')->nullable();
            $table->integer('blog_status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
