<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('job_descriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_id')->constrained();
            $table->string('job_title');
            $table->text('job_description');
            $table->foreignId('job_category')->constrained('job_categories');
            $table->string('cargo_diameters'); // JSON format
            $table->integer('cargo_quantity');
            $table->string('cargo_names'); // JSON format
            $table->string('pickup_location');
            $table->date('pickup_date');
            $table->string('delivery_location');
            $table->date('delivery_date');
            $table->string('job_files'); // Assuming paths to files
            $table->string('job_images'); // Assuming paths to images
            $table->timestamps();
            $table->softDeletes();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_descriptions');
    }
};
