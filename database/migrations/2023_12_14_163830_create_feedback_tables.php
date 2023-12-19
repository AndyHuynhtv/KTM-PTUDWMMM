<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->id(); // Tự động tạo cột id với kiểu dữ liệu bigint unsigned, khoá chính tự động tăng
            $table->string('firstname', 30)->notNull();
            $table->string('lastname', 30)->notNull();
            $table->string('email', 250)->notNull();
            $table->string('phone_number', 20)->notNull();
            $table->string('subject_name', 350)->notNull();
            $table->string('note', 1000)->notNull();
            $table->integer('status')->notNull();
            $table->timestamps(); // Thêm cột created_at và updated_at (tùy chọn)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedback');
    }
};
