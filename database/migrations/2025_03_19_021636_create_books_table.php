<?php

use App\Enums\BookLanguange;
use App\Enums\BookStatus;
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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('book_code');
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('author');
            $table->unsignedInteger('publication_year'); //tidak bisa negatif
            $table->string('isbn');
            $table->string('languange')->default(BookLanguange::INDONESIA->value);
            $table->text('synopsis')->nullable();
            $table->unsignedInteger('number_of_pages')->default(0);
            $table->string('status')->default(BookStatus::AVAILABLE->value);
            $table->string('cover')->nullable();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->foreignId('publisher_id')->constrained('publishers')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropForeign(['publisher_id']);
        });

        Schema::dropIfExists('books');
    }
};
