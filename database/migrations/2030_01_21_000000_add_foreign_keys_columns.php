<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::table('posts', static function (Blueprint $table) {
            $table->foreignId('user_id')->constrained()->onUpdate('cascade');
        });
        Schema::table('category_post', static function (Blueprint $table) {
            $table->foreignId('category_id')->constrained()->onUpdate('cascade');
            $table->foreignId('post_id')->constrained()->onUpdate('cascade');
        });
        Schema::table('comments', static function (Blueprint $table) {
            $table->foreignId('user_id')->constrained()->onUpdate('cascade');
            $table->foreignId('post_id')->constrained()->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        //
    }
};
