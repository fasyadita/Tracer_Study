<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveysTable extends Migration
{
    public function up()
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->id();  // survey_id INT AUTO_INCREMENT PRIMARY KEY
            $table->string('survey_title');
            $table->text('survey_description');
            $table->enum('survey_type', ['alumni', 'stakeholder']); // Menentukan jenis survey untuk alumni atau stakeholder
            $table->timestamps();  // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('surveys');
    }
}
