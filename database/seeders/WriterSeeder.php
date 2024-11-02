<?php

namespace Database\Seeders;

use App\Models\Writer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Writer::factory()->create([
            'img'=> '/img/user-1.jpg'
        ]);
        Writer::factory()->create([
            'img'=> '/img/user-2.jpg'
        ]);
        Writer::factory()->create([
            'img'=> '/img/user-3.jpg'
        ]);
    }
}
