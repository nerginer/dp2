<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dps', function (Blueprint $table) {
            $table->increments('id');
        
        
            $table->string('slug')->unique();
            $table->string('name');
            $table->decimal('price', 10, 2);
            $table->string('eagleFile');
            $table->string('thumbnail');
            $table->string('svgFile');
            $table->string('pdf');
            $table->text('description');
            $table->string('license');
            $table->string('productUsedIn');
            
            $table->integer('user_id')->unsigned();
            $table->integer('category_id')->unsigned();
         
           // $table->integer('likes')->unsigned();
            
          
            
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
        Schema::drop('dps');
    }
}
