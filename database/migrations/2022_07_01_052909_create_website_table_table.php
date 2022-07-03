<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('website_table', function (Blueprint $table) {
            $table->id('enquiry_id');
            $table->string('name',50);
            $table->string('cname',50);
            $table->string('email',50);
            $table->integer('phone');
            $table->text('details',200);
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
        Schema::dropIfExists('website_table');
    }
};
