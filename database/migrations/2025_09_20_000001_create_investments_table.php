<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('investments', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email');
            $table->string('phone');
            $table->decimal('amount', 16, 2);
            $table->unsignedBigInteger('plan_id');
            $table->text('message')->nullable();
            $table->timestamps();

            $table->foreign('plan_id')->references('id')->on('plans')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('investments');
    }
};
