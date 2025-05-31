<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $city = City::find($request->city_id);
$state = State::find($request->state_id);

        Schema::create('sellers', function (Blueprint $table) {
           $table->id();
        $table->string('name');
        $table->string('email')->unique();
        $table->string('phone')->unique();
        $table->string('password');
        $table->string('address');
        $table->string('city');
        $table->string('state');
        $table->string('pincode');
        $table->string('shop_name');
        $table->enum('shop_type', ['mobile', 'fashion', 'electronics']);
        $table->string('shop_image')->nullable();
        $table->string('shop_logo')->nullable();
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
        Schema::dropIfExists('sellers');
    }
}
