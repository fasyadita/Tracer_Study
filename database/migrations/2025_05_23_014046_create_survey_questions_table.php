<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveyQuestionsTable extends Migration
{
    public function up()
    {
        Schema::create('survey_questions', function (Blueprint $table) {
            $table->id();  // question_id INT AUTO_INCREMENT PRIMARY KEY
            $table->foreignId('survey_id')->constrained('surveys');  // foreign key ke surveys table
            $table->text('question_text');
            $table->enum('question_type', ['text', 'rating', 'multiple_choice']);  // Jenis pertanyaan
            $table->text('options')->nullable();  // Opsi untuk pertanyaan multiple_choice
            $table->enum('target_group', ['alumni', 'stakeholder']);  // Menentukan target grup pertanyaan
            $table->timestamps();  // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('survey_questions');
    }
}
