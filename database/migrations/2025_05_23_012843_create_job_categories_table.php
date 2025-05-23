<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('job_categories', function (Blueprint $table) {
            $table->id();  // job_category_id INT AUTO_INCREMENT PRIMARY KEY
            $table->string('category_name');  // Nama kategori pekerjaan
            $table->text('category_description')->nullable();  // Deskripsi kategori pekerjaan
            $table->timestamps();  // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('job_categories');
    }
}
