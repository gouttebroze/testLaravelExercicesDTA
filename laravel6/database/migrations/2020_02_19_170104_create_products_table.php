<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('artist_name', 255);
            $table->string('product_name', 255);
            $table->string('desc_product', 255);
            $table->string('price_product', 11);
            $table->string('img_filename', 255);
            //$table->string('category_id', 255);
            $table->timestamps();

            /*Schema::disableForeignKeyConstraints();
            Schema::create('comments', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('contact_id')->unsigned();
                $table->string('text', 255);
                $table->timestamps();
                $table->foreign('contact_id', 'cmts_ctct_fk')
                        ->references('id')
                        ->on('category')
                        ->onDelete('cascade');*/

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
