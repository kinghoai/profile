<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSocialUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::table('users', function (Blueprint $table) {
	    	$table->string('facebook')->nullable();
	    	$table->string('twitter')->nullable();
	    	$table->string('youtube')->nullable();
	    	$table->string('google')->nullable();
	    	$table->string('linkedin')->nullable();
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
		    $table->dropColumn(['facebook', 'twitter', 'youtube', 'google', 'linkedin']);
	    });
    }
}
