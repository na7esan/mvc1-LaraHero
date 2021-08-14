<?php

namespace Database\Seeders;

use App\Models\Armor;
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
        // \App\Models\User::factory(10)->create();
        Armor::factory(30)->create()->find(1)->update(['name' => 'ひかりのよろい']);

        // Armor::where('id', '1')
        //     ->update(['name' => 'ひかりのよろい']);
    }
}
