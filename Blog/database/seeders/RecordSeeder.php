<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class RecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['animes', 'jogos', 'tecnologias'];

        DB::table('records')->insert([
            'title' => Str::random(10),
            'description' => Str::random(10),
            'image' => null,
            'post_category' => Arr::random($categories)
        ]);
    }
}
