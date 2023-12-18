<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThinnaprop2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Thinnaprop2', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            
            $table->integer('Good job')->nullable();         
            $table->float('Good remake')->nullable();    
            $table->string('Good nakub')->nullable();
            $table->date('Good na na')->nullable(); 
            $table->text('Best')->nullable();   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Thinnaprop2');
    }
}
