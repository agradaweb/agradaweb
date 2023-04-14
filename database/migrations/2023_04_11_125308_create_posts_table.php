<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Traits\Database;

return new class extends Migration
{
    use Database\Migration;
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $this->addCommonFields($table, true);
            $table->string('title');
            $table->string('slug')->unique();            
            $table->fullText('excerpt');
            $table->fullText('content');
            //$this->addForeignKey($table, 'work_centers_id', ('work_centers'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};