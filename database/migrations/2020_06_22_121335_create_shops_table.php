<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop', function (Blueprint $table) {
            $table->id();            
            $table->string('email')->unique();
            $table->string('password');
            $table->string('store_name');
            $table->timestamp('email_verified_at')->nullable();            
            $table->rememberToken();
            $table->integer('user_ID')->nullable();
            $table->timestamp('shop')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop');
    }
}
