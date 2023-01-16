<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments_notifications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('TransactionType');  
            $table->string('TransID');  
            $table->string('TransTime');  
            $table->string('TransAmount');  
            $table->string('MSISDN');  
            $table->string('FirstName');  
            $table->string('MiddleName');  
            $table->string('BillRefNumber'); 
            $table->string('BusinessShortCode');  
            $table->string('OrgAccountBalance');  
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
        Schema::dropIfExists('payments_notifications');
    }
}
