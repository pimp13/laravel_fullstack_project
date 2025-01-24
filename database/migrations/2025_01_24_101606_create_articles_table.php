<?php

use App\Enums\Status;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->morphs('category');
            $table->foreignId('user_id')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();

            $table->string('title', 170)->index();

            $table->string('status', 11)->index()->default(Status::PUBLISHED->value);
            $table->boolean('is_active')->default(true);

            $table->string('image_path', 255);
            $table->text('body');
            $table->text('summary');

            $table->json('metadata');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
