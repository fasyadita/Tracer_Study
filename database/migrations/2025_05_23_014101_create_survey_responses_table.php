<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveyResponsesTable extends Migration
{
    public function up()
    {
        Schema::create('survey_responses', function (Blueprint $table) {
            $table->id();  // response_id INT AUTO_INCREMENT PRIMARY KEY
            $table->foreignId('survey_id')->constrained('surveys');  // foreign key ke surveys table
            $table->foreignId('user_id')->constrained('users');  // foreign key ke users table
            $table->text('response_data');  // Data jawaban survey dalam format JSON
            $table->timestamps();  // submitted_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('survey_responses');
    }
}
