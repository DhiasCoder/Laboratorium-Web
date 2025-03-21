<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('user_access_logs', function (Blueprint $table) {
            $table->string('user_agent')->nullable()->after('ip_address');
        });
    }

    public function down()
    {
        Schema::table('user_access_logs', function (Blueprint $table) {
            $table->dropColumn('user_agent');
        });
    }
};
