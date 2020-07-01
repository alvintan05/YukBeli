<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableWishlist extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wishlist', function (Blueprint $table) {
            $table->integer('id_user')->unsigned()->index();
            $table->integer('id_product')->unsigned()->index();
            $table->timestamps();

            // Set PK
            $table->primary(['id_user', 'id_product']);

            // Set FK wishlist --- user
            $table  ->foreign('id_user')
                    ->references('id')
                    ->on('user')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            // Set FK wishlist --- product
            $table  ->foreign('id_product')
                    ->references('id')
                    ->on('product')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wishlist');
    }
}
