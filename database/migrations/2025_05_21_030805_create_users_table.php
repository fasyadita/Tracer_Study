<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();  // user_id INT AUTO_INCREMENT PRIMARY KEY
            $table->string('username');
            $table->string('password');
            $table->enum('role', ['admin', 'alumni', 'stakeholder']);  // Role untuk admin, alumni, atau stakeholder
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone_number', 15);
            $table->timestamps();  // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
