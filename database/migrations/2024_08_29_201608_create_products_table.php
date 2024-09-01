<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('product_id'); 
            $table->string('name');
            $table->string('model_number');
            $table->string('category');
            $table->boolean('availability')->default(true);
            $table->text('product_details')->nullable();
            $table->text('how_to_use')->nullable();
            $table->text('shipping_details')->nullable();
            $table->json('images');
            $table->json('pricing'); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
