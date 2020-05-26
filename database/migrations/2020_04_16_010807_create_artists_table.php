<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artists', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->text('describe')->nullable();
            $table->string('slug')->unique();

            $table->integer('type_artist_id')->nullable();

            $table->string('provider')->nullable();
            $table->string('provider_id')->nullable();
            
            $table->boolean('is_active')->default(true);
            $table->boolean('is_premium')->default(false);
            
            $table->foreign('type_artist_id')->references('id')->on('type_artists')->onDelete('cascade');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artists');
    }
}
