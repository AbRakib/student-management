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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('roll')->nullable();
            $table->string('name');
            $table->string('nid')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->text('address')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->unique();
            $table->string('password');
            $table->string('photo')->nullable();
            $table->unsignedBigInteger('gender_id')->default(0);
            $table->unsignedBigInteger('education_id')->default(0);
            $table->unsignedBigInteger('refer_id')->default(0);
            $table->unsignedBigInteger('course_id')->default(0);
            $table->decimal('total_paid', 2)->default(0);

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
        Schema::dropIfExists('students');
    }
};
