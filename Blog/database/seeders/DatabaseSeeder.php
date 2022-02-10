<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Record;
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
        Record::factory()->count(5)->create();
    }
}
