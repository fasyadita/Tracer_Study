<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTracerRecordTable extends Migration
{
    public function up()
    {
        Schema::create('tracer_record', function (Blueprint $table) {
            $table->id();  // record_id INT AUTO_INCREMENT PRIMARY KEY
            $table->foreignId('user_id')->constrained('users');  // foreign key ke users table
            $table->foreignId('program_id')->constrained('programs');  // foreign key ke programs table
            $table->year('graduation_year');
            $table->decimal('gpa', 3, 2);
            $table->string('job_title');
            $table->string('company_name');
            $table->date('first_job_date');
            $table->date('current_instansi_start_date');
            $table->string('instansi_type');
            $table->string('instansi_name');
            $table->string('instansi_scale');
            $table->string('instansi_location');
            $table->string('profession_name');
            $table->string('direct_supervisor_name');
            $table->string('supervisor_position');
            $table->string('supervisor_phone');
            $table->string('supervisor_email');

            // Menambahkan kolom job_category_id yang merujuk ke tabel job_categories
            $table->foreignId('job_category_id')->nullable()->constrained('job_categories');  // Menambahkan kolom foreign key
            $table->timestamps();  // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('tracer_record');
    }
}
