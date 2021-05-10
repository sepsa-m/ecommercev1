<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string(first_name);
            $table->string(last_name);
            $table->string(email);
            $table->string(password);
            $table->integer(visits);
            $table->enum(gender);
            $table->id(birth_date);
            $table->string(profile_image);
            $table->enum(language);
            $table->integer(user_level);
            $table->enum(status);
            $table->string(nickname);
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
        Schema::dropIfExists('customers');
    }
}
