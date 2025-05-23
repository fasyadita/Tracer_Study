<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveyFeedbacksTable extends Migration
{
    public function up()
    {
        Schema::create('survey_feedbacks', function (Blueprint $table) {
            $table->id();  // feedback_id INT AUTO_INCREMENT PRIMARY KEY
            $table->foreignId('survey_id')->constrained('surveys');  // foreign key ke surveys table
            $table->foreignId('alumni_id')->constrained('tracer_record');  // foreign key ke tracer_record table
            $table->foreignId('stakeholder_id')->constrained('stakeholders');  // foreign key ke stakeholders table
            $table->text('feedback_text');
            $table->integer('rating');
            $table->timestamps();  // created_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('survey_feedbacks');
    }
}
