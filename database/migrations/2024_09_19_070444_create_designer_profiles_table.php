<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesignerProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designer_profiles', function (Blueprint $table) {
            $table->id('profile_id');
            $table->foreignId('designer_id')->constrained('interior_designers', 'designer_id'); // Đảm bảo đúng trường và bảng
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->text('bio')->nullable();
            $table->string('company_name', 255)->nullable();
            $table->string('website_url', 255)->nullable();
            $table->string('fb_url', 255)->nullable();
            $table->string('twitter_url', 255)->nullable();
            $table->string('instagram', 255)->nullable();
            $table->string('linkedin', 255)->nullable();
            $table->string('skype', 255)->nullable();
            $table->string('profile_image_url', 255)->nullable();
            $table->string('contact_number', 15)->nullable();
            $table->string('contact_email', 100)->nullable();
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
        Schema::dropIfExists('designer_profiles');
    }
}
