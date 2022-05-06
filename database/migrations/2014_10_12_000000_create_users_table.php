<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('profile_created')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->double('phone')->nullable();
            $table->date('dob')->nullable();
            $table->text('city')->nullable();
            $table->text('state')->nullable();
            $table->string('country')->nullable();
            $table->text('postcode')->nullable();
            $table->string('gender')->nullable();
            $table->text('about_yourself')->nullable();
            $table->text('address')->nullable();
            $table->text('profile_photo_path')->nullable();
            $table->text('height')->nullable();
            $table->text('Diet')->nullable();
            $table->text('marital_status')->nullable();
            $table->text('religion')->nullable();
            $table->text('community')->nullable();
            $table->text('Working_as')->nullable();
            $table->text('mother_tongue')->nullable();
            $table->text('education')->nullable();
            $table->tinyinteger('status')->default(0)->comment('0=inactive,1=active'); 
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
