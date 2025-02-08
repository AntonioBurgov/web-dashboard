<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('buttons', function (Blueprint $table) {
            $table->id();
            $table->integer('cell_number')->unique();
            $table->string('hyperlink')->nullable();
            $table->string('color')->default('#FFFFFF');
            $table->timestamps();
        });
    }



    public function down(): void
    {
        Schema::dropIfExists('buttons');
    }
};
