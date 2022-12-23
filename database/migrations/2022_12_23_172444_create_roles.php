<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $Admin = Role::create(['name' => 'admin']);
        $cliente = Role::create(['name' => 'cliente']);
        $user = User::find(1);
        $user->assignRole($Admin);
        $user = User::find(2);
        $user->assignRole($cliente);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
};