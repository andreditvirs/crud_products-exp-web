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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('password', 3000);
            $table->string('email')->nullable();
            $table->enum('name', ['CUST', 'ADMIN']);
            $table->string('role');
            $table->datetime('last_login_at')->nullable();
            $table->boolean('is_approved')->default(false);
            $table->integer('approved_by_users_id')->nullable();
            $table->datetime('approved_at')->nullable();
            $table->text('url_image')->nullable();
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
};
