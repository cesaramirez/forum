<?php

use App\Reply;
use App\Thread;
use Illuminate\Database\Seeder;

class ThreadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $threads = factory(Thread::class, 5)->create();

        $threads->each(function ($thread) {
            factory(Reply::class, 5)->create(['thread_id' => $thread->id]);
        });
    }
}
