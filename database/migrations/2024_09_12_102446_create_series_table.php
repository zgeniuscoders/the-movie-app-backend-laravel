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
        Schema::create('series', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("original_title");
            $table->string("production_companies");
            $table->string("production_countries");
            $table->string("original_language");
            $table->string("poster_path");
            $table->text("overview");
            $table->boolean("adult")->default(false);
            $table->timestamp("release_date");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('series');
    }
};
