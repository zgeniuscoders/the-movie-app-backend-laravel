<?php

use App\Models\Serie;
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
        Schema::create('seasons', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Serie::class)->constrained()->cascadeOnDelete();
            $table->string("title");
            $table->string("poster_path");
            $table->string("original_title");
            $table->timestamp("release_date");
            $table->text("overview");
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
        Schema::dropIfExists('seasons');
    }
};
