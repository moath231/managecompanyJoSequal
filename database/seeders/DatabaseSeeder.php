<?php

namespace Database\Seeders;

use App\Models\company;
use App\Models\employee;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create([
            'name'=>'moath',
            'email'=>'admin@admin.com',
            'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',//password
        ]);

        // company::factory(1)->create();
        // employee::factory(10)->create();
    }
}
