<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStakeholdersTable extends Migration
{
    public function up()
    {
        Schema::create('stakeholders', function (Blueprint $table) {
            $table->id();  // stakeholder_id INT AUTO_INCREMENT PRIMARY KEY
            $table->foreignId('user_id')->constrained('users');  // foreign key ke users table
            $table->string('first_name');
            $table->string('company_name');
            $table->string('job_title');
            $table->timestamps();  // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('stakeholders');
    }
}
