<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSendDailyEmail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_send_daily_mail', function (Blueprint $table) {
            $table->increments('id');
            $table->string('file_url');
            $table->string('mime_type');
            $table->string('extension');
            $table->text('content');
            $table->string('status');
            $table->string('email_from');
            $table->string('email');
            $table->string('email_cc');
            $table->string('email_bcc');
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
        Schema::dropIfExists('send_daily_email');
    }
}
