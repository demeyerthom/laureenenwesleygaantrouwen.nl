<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateInviteesTableAddGroupUid extends Migration
{
    public function up()
    {
        Schema::table('invitees', function (Blueprint $table) {
            $table->string('group_uid')->index()->after('id');
            $table->integer('event_permission_id')->index()->after('group_uid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('invitees', function (Blueprint $table) {
            $table->dropColumn('group_uid', 'event_permission_id');
        });
    }
}
