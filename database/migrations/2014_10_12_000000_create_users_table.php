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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string("username")->trim()->nullable();
            $table->string("password")->trim()->nullable();
            // Step 1 Personal Info
            $table->string('first_name')->trim();
            $table->string('middle_name')->trim();
            $table->string('surname')->trim();
            $table->string('email')->trim();
            $table->string('gender');
            $table->date('birth_date')->nullable();
            $table->integer('age')->nullable();
            $table->string('user_type');
            $table->string('marital_status')->nullable();
            // Step 2 Contact Info
            $table->string('phone_number1')->trim()->nullable();
            $table->string('phone_number2')->trim()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            // Step 3 Permanent Address
            $table->string('per_zip_code')->nullable();
            $table->string('per_country')->nullable();
            $table->string('per_house_number')->nullable();
            $table->string('per_street')->nullable();
            $table->string('per_barangay')->nullable();
            $table->string('per_city')->nullable();
            $table->string('per_province')->nullable();
            $table->string('per_region')->nullable();
            // Step 3 Current Address
            $table->string('cur_zip_code')->nullable();
            $table->string('cur_country')->nullable();
            $table->string('cur_house_number')->nullable();
            $table->string('cur_street')->nullable();
            $table->string('cur_barangay')->nullable();
            $table->string('cur_city')->nullable();
            $table->string('cur_province')->nullable();
            $table->string('cur_region')->nullable();
            // Step 4 Emergency Contact Info
            $table->string('emergency_name')->nullable();
            $table->string('emergency_relationship')->nullable();
            $table->string('emergency_phone')->nullable();
            $table->string('emergency_email')->nullable();
            $table->string('emergency_address')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
