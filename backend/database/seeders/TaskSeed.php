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
            ['name' => 'Backlog', 'color' => 'indigo'],
            ['name' => 'Pending', 'color' => 'warning'],
            ['name' => 'Completed', 'color' => 'success'],
            ['name' => 'In Progress', 'color' => 'dark'],
        ]);

        $result= DB::table('task_statuses')->get('id')->pluck('id')->toArray();

        DB::table('tasks')->insert([
            ['title' => 'this is the first task', 'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen", 'status_id' => $result[rand(0, 3)]],
            ['title' => 'this is the second task', 'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen", 'status_id' => $result[rand(0, 3)]],
            ['title' => 'this is the third task', 'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen", 'status_id' => $result[rand(0, 3)]],
            ['title' => 'this is the first task', 'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen", 'status_id' => $result[rand(0, 3)]],
            ['title' => 'this is the second task', 'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen", 'status_id' => $result[rand(0, 3)]],
            ['title' => 'this is the third task', 'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen", 'status_id' => $result[rand(0, 3)]],
            ['title' => 'this is the third task', 'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen", 'status_id' => $result[rand(0, 3)]],
            ['title' => 'this is the third task', 'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen", 'status_id' => $result[rand(0, 3)]],
            ['title' => 'this is the third task', 'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen", 'status_id' => $result[rand(0, 3)]],
            ['title' => 'this is the third task', 'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen", 'status_id' => $result[rand(0, 3)]],
            ['title' => 'this is the third task', 'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen", 'status_id' => $result[rand(0, 3)]],
            ['title' => 'this is the third task', 'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen", 'status_id' => $result[rand(0, 3)]],
            ['title' => 'this is the third task', 'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen", 'status_id' => $result[rand(0, 3)]],
        ]);

    }
}
