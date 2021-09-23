<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            
                $table->id();
                $table->string('title', 255);
                $table->string('subtitle', 255);
                $table->string('description', 255);
                $table->text('picture');
                $table->string('genre', 255);
                $table->timestamps(); // created_at updated_at
         
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('authors');
    }
}