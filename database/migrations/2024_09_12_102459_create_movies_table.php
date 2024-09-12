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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("poster_path");
            $table->string("original_title");
            $table->string("production_companies");
            $table->string("production_countries");
            $table->string("original_language");
            $table->timestamp("release_date");
            $table->text("overview");
            $table->integer("duration");
            $table->boolean("adult")->default(false);
            $table->integer("budget");
            $table->integer("revenue");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
