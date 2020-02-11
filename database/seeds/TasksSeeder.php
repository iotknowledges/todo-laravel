<?php

use App\Task;
use Illuminate\Database\Seeder;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::truncate();

        foreach (range(1,10) as $sid) {

            Task::create(
                [
                    'name' => 'Task ' . $sid,
                    'done' => true,
                ]);
        }
    }
}
