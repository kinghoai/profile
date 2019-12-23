<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnPhoneUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone', 191)->unique();
            $table->string('address', 191)->nullable();
            $table->date('birthday')->nullable();
            $table->string('job')->nullable();
            $table->text('about_description')->nullable();
            $table->text('skill_description')->nullable();
            $table->text('knowledge_description')->nullable();
            $table->text('language_description')->nullable();
            $table->text('experience_description')->nullable();
            $table->text('education_description')->nullable();
            $table->text('project_description')->nullable();
            $table->text('contact_description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['phone', 'address', 'birthday', 'job', 'skill_description', 'about_description', 'knowledge_description', 'language_description', 'experience_description', 'education_description', 'project_description', 'contact_description']);
        });
    }
}
