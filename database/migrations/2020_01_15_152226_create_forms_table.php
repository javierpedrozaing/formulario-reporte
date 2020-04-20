<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ticket_number');
            $table->string('customer_name');
            $table->string('customer_address');
            $table->string('customer_phone');
            $table->string('contact_name');
            $table->string('customer_position');

            $table->string('activity_type');
            $table->string('pc_type');
            $table->string('pc_serial');
            $table->string('date');
            $table->string('initial_hour');
            $table->string('final_hour');
            $table->string('total_time');

            $table->string('observations');

            $table->string('customer_sign_name');
            $table->string('customer_sign_position');
            $table->string('customer_sign');
            $table->string('customer_date');
            $table->string('ps_sign_name');
            $table->string('ps_sign_position');
            $table->string('ps_sign');
            $table->string('ps_date');
            $table->string('service_qualification');
            $table->string('service_comments');

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
        Schema::dropIfExists('forms');
    }
}
