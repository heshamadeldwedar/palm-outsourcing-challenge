<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator;
use Illuminate\Container\Container;

class TaskSeed extends Seeder
{


    protected $faker;


    public function __construct()
    {
        $this->faker = $this->withFaker();
    }

    protected function withFaker() {
        return Container::getInstance()->make(Generator::class);
    }

    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('task_statuses')->insert([
            ['name' => 'Backlog', 'color_hex' => '#ADD8E6'],
            ['name' => 'Pending', 'color_hex' => '#FFFF00'],
            ['name' => 'Completed', 'color_hex' => '#00FF00'],
            ['name' => 'In Progress', 'color_hex' => '#FFA500'],
        ]);

    }
}
