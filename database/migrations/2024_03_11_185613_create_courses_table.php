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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('teacher_id')->default(0);
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('details')->nullable();
            $table->string('photo')->nullable();
            $table->decimal('fee', 2)->default(0);
            $table->string('duration')->nullable();
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();
            
            $table->string('added_ip')->nullable();
            $table->string('updated_ip')->nullable();
            $table->unsignedBigInteger('added_by')->default(0);
            $table->unsignedBigInteger('updated_by')->default(0);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->unsignedBigInteger('deleted')->default(0);
            $table->unsignedBigInteger('views')->default(1);
            $table->unsignedBigInteger('status')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
