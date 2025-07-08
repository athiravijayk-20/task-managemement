<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up()
{
    Schema::table('users', function (Blueprint $table) {
        $table->date('joining_date')->nullable()->after('email');
        $table->date('birthday')->nullable()->after('joining_date');
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
        $table->dropColumn(['joining_date', 'birthday']);
    });
}
};
