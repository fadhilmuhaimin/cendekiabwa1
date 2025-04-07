<?php

use App\Enums\FinePaymentStatus;
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
        Schema::create('fines', function (Blueprint $table) {
            $table->id();
            $table->foreignId('return_book_id')->constrained('return_books')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->decimal('late_fee', 10, 2)->default(0)->comment("Field for late fee");
            $table->decimal("other_fee",10,2)->default(0);
            $table->decimal("total_fee")->computed();
            $table->date('fine_date');
            $table->string('payment_status')->default(value:FinePaymentStatus::PENDING->value);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fines');
    }
};
