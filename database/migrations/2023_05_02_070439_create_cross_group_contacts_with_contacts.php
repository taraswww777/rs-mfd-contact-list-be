<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cross_group_contacts_with_contacts', function (Blueprint $table) {
            $table->foreignId('groupId')->constrained('group_contacts');
            $table->foreignId('contactId')->constrained('contacts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cross_group_contacts_with_contacts', function (Blueprint $table) {
            $table->dropForeign(['groupId']);
            $table->dropForeign(['contactId']);
        });
        Schema::dropIfExists('cross_group_contacts_with_contacts');
    }
};
