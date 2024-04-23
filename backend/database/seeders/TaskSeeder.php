<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tasks')->insert([
            'title' => 'Task A',
            'description' => 'Task A description',
            'status' => false,
        ]);
        DB::table('tasks')->insert([
            'title' => 'Task B',
            'description' => 'Task B description',
            'status' => false,
        ]);
        DB::table('tasks')->insert([
            'title' => 'Task C',
            'description' => 'Task C description',
            'status' => false,
        ]);
        DB::table('tasks')->insert([
            'title' => 'Task D',
            'description' => 'Task D Rescription',
            'status' => false,
        ]);
    }
}
