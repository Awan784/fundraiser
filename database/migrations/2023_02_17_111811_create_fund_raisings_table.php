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
        Schema::create('fund_raisings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('reference_id')->nullable();
            $table->string('country');
            $table->string('name');
            $table->string('location');
            $table->string('why_fundraising');
            $table->string('fund_name')->nullable();
            $table->string('goal_amount')->nullable();
            $table->string('collecting_fund_for')->nullable();
            $table->string('fund_receive')->nullable();
            $table->string('bank_id')->nullable();
            $table->string('phone_no')->nullable(); 
            $table->string('fund_type')->nullable();
            $table->string('code')->nullable();
            $table->string('s_description')->nullable();
            $table->text('l_description')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('raiser_images')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fund_raisings');
    }
};
